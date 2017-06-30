#include "readInfo.h"
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#if defined(_WIN32) || defined(WIN32)
const char* inet_ntop(int af, const void* src, char* dst, int cnt){

    struct sockaddr_in srcaddr;

    memset(&srcaddr, 0, sizeof(struct sockaddr_in));
    memcpy(&(srcaddr.sin_addr), src, sizeof(srcaddr.sin_addr));

    srcaddr.sin_family = af;
    if (WSAAddressToString((struct sockaddr*) &srcaddr, sizeof(struct sockaddr_in), 0, dst, (LPDWORD) &cnt) != 0) {
        DWORD rv = WSAGetLastError();
        printf("WSAAddressToString() : %d\n",rv);
        return NULL;
    }
    return dst;
}
#endif
int findip(char *ip, int iplen, char *host)
{
    struct hostent *server;

    server = gethostbyname(host); // récupère l'addresse IP en utilisant le nom de domaine

    if (server == NULL)
    {
        fprintf(stderr,"ERROR, no such host");
        return -1;
    }

    inet_ntop(AF_INET,(void *)server->h_addr_list[0], ip, iplen); // conversion de server en chaîne de caractère
    return 0;
}

int readInfo(char *buffer)
{
    #if defined(_WIN32) || defined(WIN32)
        WSADATA WSAData;
        WSAStartup(MAKEWORD(2,2), &WSAData);
    #endif

    SOCKET sock;
    SOCKADDR_IN sin;
    char *host = "api.openweathermap.org";
    char *api = "GET /data/2.5/weather?id=3019265&APPID=7ebcbda2434ee5db9e25c2b1ae8e6d99&lang=fr HTTP/1.0\r\n\r\n";
    int iplen = 15; //XXX.XXX.XXX.XXX
    char *ip = NULL;

    ip = malloc(sizeof(char) * (iplen+1));
    if (ip == NULL)
    {
        fprintf(stderr,"ERROR, cannot create ip string");
        return -1;
    }
    memset(ip, 0, iplen+1);

    if( findip(ip, iplen, host) != 0)
        return -1;

    sock = socket(AF_INET, SOCK_STREAM, 0); //création du socket
    if(sock == SOCKET_ERROR)
    {
        fprintf(stderr,"ERROR, cannot create socket");
        return -1;
    }
    sin.sin_addr.s_addr = inet_addr(ip);
    sin.sin_family = AF_INET;
    sin.sin_port = htons(80); // port HTTP.

    if(connect(sock, (SOCKADDR*)&sin, sizeof(sin)) != SOCKET_ERROR)
        printf("Connexion to %s on port %d\n", inet_ntoa(sin.sin_addr), htons(sin.sin_port));
    else
        fprintf(stderr,"ERROR, Unable to connect");

    send(sock, api, strlen(api), 0); // on envoie la requête HTTP.

    if (recv(sock, buffer, BUFFER_SIZE, 0) != 0) // si le buffer reçoit des données.
    {
        printf("%s",buffer);
	printf("\nout of buffer\n");
    }
    else
        printf("ERROR, cannot read the buffer");

    free(ip);
    ip = NULL;
    closesocket(sock); // on ferme le socket.

    #if defined(_WIN32) || defined(WIN32)
        WSACleanup();
    #endif

    return 0;
}
