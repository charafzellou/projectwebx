#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "parseJSON.h"

int parseJSON(){
	printf("\nparseJSON\n");

    // Ouverture du fichier WEATHERJSON
    FILE* WeatherJSON = fopen("weather.json", "r");
	if(WeatherJSON == NULL)
    {
        fprintf(stderr,"\nERROR, cannot open the weather file");
        return -1;
    }

    // Initilisation des variables liées à la météo
    char* weather = NULL, description = NULL, temp_now = NULL, pressure = NULL, humidity = NULL,
        temp_min = NULL, temp_max = NULL, visibility = NULL, wind_speed = NULL, wind_degree = NULL,
        sun_sunrise = NULL, sun_sunset = NULL;

    // Allocation du fichier dans une variable
    fseek( WeatherJSON , 0L , SEEK_END);
    long lSize = ftell( WeatherJSON );
    rewind( WeatherJSON );

    char* charJSON = (char*) malloc(sizeof(char)*lSize);
        if( charJSON == NULL ){
            fclose(WeatherJSON);
            fputs("Memory alloc for CHARJSON fails!", stderr);
            return -1;
        }

    // Stockage et vérification
    size_t result = fread( charJSON, 1, lSize, WeatherJSON);
        if( result == NULL ){
            fclose(WeatherJSON);
            free(charJSON);
            fputs("Entire read of WeatherJSON fails", stderr);
            return -1;
        }
        if (result != lSize) {
            fputs("Reading error in result",stderr);
            return -1;
        }

    // Fermeture du flux-fichier
    fclose(WeatherJSON);

    char* pos_actuelle = "";
    char char_actuel = "";

    //
    pos_actuelle = strstr(charJSON, "\"weather\":[{\"id\":");


















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
