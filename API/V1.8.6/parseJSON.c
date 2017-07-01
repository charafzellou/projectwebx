#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "parseJSON.h"

int parseJSON(char *filteredInf){
	printf("\nparseJSON");
	printf("\n\ntexte%s",filteredInf);
	printf("\nl9");
    // Initilisation des variables liées à la météo
	int i = 0;
	char *findweather = "\"weather\":[{%\"id\":";
	int sizeofstring = 0;
	char *position = NULL;
    char* weather = NULL, description = NULL, temp_now = NULL, pressure = NULL, humidity = NULL,
        temp_min = NULL, temp_max = NULL, visibility = NULL, wind_speed = NULL, wind_degree = NULL,
        sun_sunrise = NULL, sun_sunset = NULL;
	
	position = strstr(filteredInf, findweather);
	if( position == NULL )
    {
        fprintf(stderr,"\nERROR, can't find the string");
        return -1;
    }
	else
		i = strlen("\"weather\":[{%\"id\":");
	while(position[i] != ',')
	{
		i++;
		sizeofstring++;
	}
	
	printf("%d,%d",strlen("\"weather\":[{%\"id\":"),sizeofstring);
	// Passage à la partie SQL
    /*
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
    */
    return 0;
}
