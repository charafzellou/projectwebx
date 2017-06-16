#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "parseJSON.h"

int parseJSON(){
	printf("\nparseJSON\n");

	// Initialisation des variables
	int saut = 0;
    int sizeofmain = 0;
    int i = 0;

    // Ouverture du fichier WEATHERJSON
    FILE* WeatherJSON = fopen("weather.json", "r");
	if(WeatherJSON == NULL)
    {
        fprintf(stderr,"\nERROR, cannot open the weather file");
        return -1;
    }

    // Initilisation des variables liées à la météo
    char* description = NULL;
    char weather[4] = "", temp_now[7] = "", pressure[5] = "", humidity[3] = "", temp_min[7] = "", temp_max[7] = "",
        visibility[6] = "", wind_speed[4] = "", wind_degree[4] = "", sun_sunrise[11] = "", sun_sunset[11] = "";

    // Allocation du fichier dans une variable
    fseek( WeatherJSON , 0L , SEEK_END);
    long lSize = ftell( WeatherJSON );
    rewind( WeatherJSON );
    charJSON = calloc( 1, lSize+1 );
        if( charJSON == NULL ) fclose(charJSON), fputs("memory alloc fails", stderr), return -1;
    fread( charJSON , lSize, 1 , fp);
        if( 1 != fread( charJSON , lSize, 1 , fp) )
            fclose(WeatherJSON),free(charJSON),fputs("entire read fails", stderr), return -1;

    // Fermeture du flux-fichier
    fclose(WeatherJSON);

    int pos_actuelle = 0;
    char char_actuel = "";

    strstr(WeatherJSON, "\"weather\":[{\"id\":");
    char_actuel = fgetc(WeatherJSON);
    while(char_actuel != ',')
    	char_actuel = fgetc(WeatherJSON);

    fseek(WeatherJSON, 16, SEEK_CUR);
    while(char_actuel != '"')
    {
    	sizeofmain++;
	char_actuel = fgetc(WeatherJSON);
    }
	printf("l38");
    description = malloc (sizeof(char) * (sizeofmain + 1));
    fseek(WeatherJSON, -(sizeofmain + 1), SEEK_CUR);

    fread(description, sizeofmain, 1, WeatherJSON);
    description[sizeofmain] = '\0';

    printf("%s",description);

    while(saut < 3){
        char_actuel = fgetc(WeatherJSON);
        if(char_actuel == ','){
            saut++;
        }
    }
    saut = 0;
    while(saut < 2){
        char_actuel = fgetc(WeatherJSON);
         if(char_actuel == ':'){
            saut++;
        }
    }
    //char_actuel = fgetc(WeatherJSON);
    //printf("\n res : %c et saut : %d",char_actuel, saut);

   // fseek(WeatherJSON, 90, SEEK_CUR);
   // char char_actuel = "";
    char_actuel = fgetc(WeatherJSON);
    while(char_actuel != ',')
    {
        temp_now[i] = char_actuel;
        char_actuel = fgetc(WeatherJSON);
        i++;
    }
    //fread(temp_now, 6, 1, WeatherJSON);
    while(char_actuel != ':'){
        char_actuel = fgetc((WeatherJSON));
    }
   // printf("\n\n resbis : %c", char_actuel);
   // temp_now[i] = '/0';
    i = 0;
    char_actuel = fgetc(WeatherJSON);
    while(char_actuel != ',')
    {
        pressure[i] = char_actuel;
        char_actuel = fgetc(WeatherJSON);
        i++;
    }
    // printf("\n\n resbis : %s", pressure);
    while(char_actuel != ':'){
        char_actuel = fgetc((WeatherJSON));
    }
     i = 0;
    char_actuel = fgetc(WeatherJSON);
    while(char_actuel != ',')
    {
        humidity[i] = char_actuel;
        char_actuel = fgetc(WeatherJSON);
        i++;
    }
   // printf("\n\n resbis : %s", humidity);
     //printf("\n\n caractere : %c", char_actuel);
    //humidity[i] = '/0';
     while(char_actuel != ':'){
        char_actuel = fgetc((WeatherJSON));
    }
     i = 0;
    char_actuel = fgetc(WeatherJSON);
    while(char_actuel != ',')
    {
        temp_min[i] = char_actuel;
        char_actuel = fgetc(WeatherJSON);
        i++;
    }
    //printf("\n\n resbis : %s", temp_min);
    while(char_actuel != ':'){
        char_actuel = fgetc((WeatherJSON));
    }
     i = 0;
    char_actuel = fgetc(WeatherJSON);
    while(char_actuel != '}')
    {
        temp_max[i] = char_actuel;
        char_actuel = fgetc(WeatherJSON);
        i++;
    }
    //printf("\n\n resbis : %s", temp_max);
    //temp_max[i] = '/0';
    while(char_actuel != ':'){
        char_actuel = fgetc((WeatherJSON));
    }
    i = 0;
    char_actuel = fgetc(WeatherJSON);
    while(char_actuel != ',')
    {
        visibility[i] = char_actuel;
        char_actuel = fgetc(WeatherJSON);
        i++;
    }
    //printf("\n\n resbis : %s", visibility);
    saut = 0;
    while(saut < 2){
        char_actuel = fgetc(WeatherJSON);
         if(char_actuel == ':'){
            saut++;
        }
    }
    i = 0;
    char_actuel = fgetc(WeatherJSON);
    while(char_actuel != ',')
    {
        wind_speed[i] = char_actuel;
        char_actuel = fgetc(WeatherJSON);
        i++;
    }
    //printf("\n\n resbis : %s", wind_speed);
    while(char_actuel != ':'){
        char_actuel = fgetc((WeatherJSON));
    }
    i = 0;
    char_actuel = fgetc(WeatherJSON);
    while(char_actuel != '}')
    {
        wind_degree[i] = char_actuel;
        char_actuel = fgetc(WeatherJSON);
        i++;
    }
    // printf("\n\n resbis : %s", wind_degree);
     saut = 0;
    while(saut < 9){
        char_actuel = fgetc(WeatherJSON);
         if(char_actuel == ':'){
            saut++;
        }
    }
    i = 0;
    char_actuel = fgetc(WeatherJSON);
    while(char_actuel != ',')
    {
        sun_sunrise[i] = char_actuel;
        char_actuel = fgetc(WeatherJSON);
        i++;
    }
    //printf("\n\n resbis : %s", sun_sunrise);
    while(char_actuel != ':'){
        char_actuel = fgetc((WeatherJSON));
    }
    i = 0;
    char_actuel = fgetc(WeatherJSON);
    while(char_actuel != '}')
    {
        sun_sunset[i] = char_actuel;
        char_actuel = fgetc(WeatherJSON);
        i++;
    }
    fclose(WeatherJSON);

    // Passage à la partie SQL
    MYSQL sql;
    mysql_init(&sql);
    mysql_options(&sql,MYSQL_READ_DEFAULT_GROUP,"option");
    if(mysql_real_connect(&sql,"127.0.0.1","root","aenprojectx","aen",0,NULL,0))
    {
    	  mysql_query(&sql, "SET NAMES 'utf8'");
          char marequete[600] = "";
          // On stock la requête dans notre tableau de CHAR
          sprintf(marequete, "INSERT INTO meteo VALUES('','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')"
                  ,weather,description,temp_now,pressure,humidity,temp_min,temp_max,visibility,wind_speed,wind_degree,sun_sunrise,sun_sunset);
          // On exécute la requête
          mysql_query(&sql, marequete);
          mysql_close(&sql);
    }
    else
    {
        printf("Une erreur a eu lieu lors de la connexion sur la base de données!");
    }
    free(description);
    return 0;
}
