#include "writeInfo.h"
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int parse(char *filteredInf, char **ptr_info, char *finder, char endchar)
{
	printf("\nParse");
	printf("\n\ntexte%s",filteredInf);
	int i = 0;
	int j = 0;
	int sizeofstring = 0;
	char *position = NULL;
	position = strstr(filteredInf, finder);

	if( position == NULL )
    {
        fprintf(stderr,"\nERROR, can't find the string");
        return -1;
    }
	else
		i = strlen(finder);
	
	
	while(position[i] != endchar)
	{
		i++;
		sizeofstring++;
	}
	printf("\ni=%d sizeofstring%d",i,sizeofstring);
	
	printf("\nici1");
	*ptr_info = malloc (sizeof(char) * (sizeofstring + 1));
	printf("\nici2");
	if(*ptr_info == NULL)
	{
		fprintf(stderr,"\nERROR, can't create dyn table");
		return -1;
	}
	printf("\nici3");
	for(j = 0; j < sizeofstring; j++)
	{
		printf("\nici4");
		*ptr_info[j] = position[strlen(finder)+j];
	}
	
	*ptr_info[sizeofstring] = '\0';
	
	return 0;
}

int parseJSON(char *filteredInf){
	
	printf("\nparseJSON");
	printf("\n\ntexte%s",filteredInf);
	int i = 0;
	int j = 0;
	char *position = NULL;
	
	char *findweather = "weather\":[{\"id\":";
	char *finddescription = "description\":\"";
	char *findtemp_now = "temp\":";
	char *findpressure = "pressure\":";
	char *findhumidity = "humidity\":";
	char *findtemp_min = "temp_min\":";
	char *findtemp_max = "temp_max\":";
	char *findvisibility = "visibility\":";
	char *findwind_speed = "speed\":";
	char *findwind_degree = "deg\":";
	char *findsun_sunrise = "sunrise\":";
	char *findsun_sunset = "sunset\":";
	char *finddt = "dt\":";
	
	printf("\n%s",findweather);
	int sizeofstring = 0;
	    // Initilisation des variables liées à la météo
    char *weather = NULL;
	char *description = NULL;
	char *temp_now = NULL;
	char *pressure = NULL;
	char *humidity = NULL;
	char *temp_min = NULL;
	char *temp_max = NULL;
	char *visibility = NULL;
	char *wind_speed = NULL;
	char *wind_degree = NULL;
	char *sun_sunrise = NULL;
	char *sun_sunset = NULL;
	char *dt = NULL;
	
	//parse(filteredInf, &weather, findweather, ',');
	//weather
	position = strstr(filteredInf, findweather);
	if( position == NULL )
    {
        fprintf(stderr,"\nERROR, can't find the string");
        return -1;
    }
	else
		i = strlen(findweather);
	while(position[i] != ',')
	{
		i++;
		sizeofstring++;
	}
	weather = malloc (sizeof(char) * (sizeofstring + 1));
	if(weather == NULL)
	{
		fprintf(stderr,"\nERROR, can't create dyn table");
		return -1;
	}
	for(j = 0; j < sizeofstring; j++)
		weather[j] = position[strlen(findweather)+j];
	weather[sizeofstring] = '\0';
	sizeofstring = 0;
	
	//description
	position = strstr(filteredInf, finddescription);
	if( position == NULL )
    {
        fprintf(stderr,"\nERROR, can't find the string");
        return -1;
    }
	else
		i = strlen(finddescription);
	while(position[i] != '"')
	{
		i++;
		sizeofstring++;
	}
	description = malloc (sizeof(char) * (sizeofstring + 1));
	if(description == NULL)
	{
		fprintf(stderr,"\nERROR, can't create dyn table");
		return -1;
	}
	for(j = 0; j < sizeofstring; j++)
	description[j] = position[strlen(finddescription)+j];
	description[sizeofstring] = '\0';
	sizeofstring = 0;
	
	//temp_now
	position = strstr(filteredInf, findtemp_now);
	if( position == NULL )
    {
        fprintf(stderr,"\nERROR, can't find the string");
        return -1;
    }
	else
		i = strlen(findtemp_now);
	while(position[i] != ',')
	{
		i++;
		sizeofstring++;
	}
	temp_now = malloc (sizeof(char) * (sizeofstring + 1));
	if(temp_now == NULL)
	{
		fprintf(stderr,"\nERROR, can't create dyn table");
		return -1;
	}
	for(j = 0; j < sizeofstring; j++)
	temp_now[j] = position[strlen(findtemp_now)+j];
	temp_now[sizeofstring] = '\0';
	sizeofstring = 0;
	
	//pressure
	position = strstr(filteredInf, findpressure);
	if( position == NULL )
    {
        fprintf(stderr,"\nERROR, can't find the string");
        return -1;
    }
	else
		i = strlen(findpressure);
	while(position[i] != ',')
	{
		i++;
		sizeofstring++;
	}
	pressure = malloc (sizeof(char) * (sizeofstring + 1));
	if(pressure == NULL)
	{
		fprintf(stderr,"\nERROR, can't create dyn table");
		return -1;
	}
	for(j = 0; j < sizeofstring; j++)
		pressure[j] = position[strlen(findpressure)+j];
	pressure[sizeofstring] = '\0';
	sizeofstring = 0;
	
	//humidity
	position = strstr(filteredInf, findhumidity);
	if( position == NULL )
    {
        fprintf(stderr,"\nERROR, can't find the string");
        return -1;
    }
	else
		i = strlen(findhumidity);
	while(position[i] != ',')
	{
		i++;
		sizeofstring++;
	}
	humidity = malloc (sizeof(char) * (sizeofstring + 1));
	if(humidity == NULL)
	{
		fprintf(stderr,"\nERROR, can't create dyn table");
		return -1;
	}
	for(j = 0; j < sizeofstring; j++)
	humidity[j] = position[strlen(findhumidity)+j];
	humidity[sizeofstring] = '\0';
	sizeofstring = 0;
	
	//temp_min
	position = strstr(filteredInf, findtemp_min);
	if( position == NULL )
    {
        fprintf(stderr,"\nERROR, can't find the string");
        return -1;
    }
	else
		i = strlen(findtemp_min);
	while(position[i] != ',')
	{
		i++;
		sizeofstring++;
	}
	temp_min = malloc (sizeof(char) * (sizeofstring + 1));
	if(temp_min == NULL)
	{
		fprintf(stderr,"\nERROR, can't create dyn table");
		return -1;
	}
	for(j = 0; j < sizeofstring; j++)
	temp_min[j] = position[strlen(findtemp_min)+j];
	temp_min[sizeofstring] = '\0';
	sizeofstring = 0;
	
	//temp_max
	position = strstr(filteredInf, findtemp_max);
	if( position == NULL )
    {
        fprintf(stderr,"\nERROR, can't find the string");
        return -1;
    }
	else
		i = strlen(findtemp_max);
	while(position[i] != ',')
	{
		i++;
		sizeofstring++;
	}
	temp_max = malloc (sizeof(char) * (sizeofstring + 1));
	if(temp_max == NULL)
	{
		fprintf(stderr,"\nERROR, can't create dyn table");
		return -1;
	}
	for(j = 0; j < sizeofstring; j++)
	temp_max[j] = position[strlen(findtemp_max)+j];
	temp_max[sizeofstring] = '\0';
	sizeofstring = 0;
	
	//visibility
	position = strstr(filteredInf, findvisibility);
	if( position == NULL )
    {
        fprintf(stderr,"\nERROR, can't find the string");
        return -1;
    }
	else
		i = strlen(findvisibility);
	while(position[i] != ',')
	{
		i++;
		sizeofstring++;
	}
	visibility = malloc (sizeof(char) * (sizeofstring + 1));
	if(visibility == NULL)
	{
		fprintf(stderr,"\nERROR, can't create dyn table");
		return -1;
	}
	for(j = 0; j < sizeofstring; j++)
	visibility[j] = position[strlen(findvisibility)+j];
	visibility[sizeofstring] = '\0';
	sizeofstring = 0;
	
	//wind_speed
	position = strstr(filteredInf, findwind_speed);
	if( position == NULL )
    {
        fprintf(stderr,"\nERROR, can't find the string");
        return -1;
    }
	else
		i = strlen(findwind_speed);
	while(position[i] != ',')
	{
		i++;
		sizeofstring++;
	}
	wind_speed = malloc (sizeof(char) * (sizeofstring + 1));
	if(wind_speed == NULL)
	{
		fprintf(stderr,"\nERROR, can't create dyn table");
		return -1;
	}
	for(j = 0; j < sizeofstring; j++)
	wind_speed[j] = position[strlen(findwind_speed)+j];
	wind_speed[sizeofstring] = '\0';
	sizeofstring = 0;
	
	//wind_degree
	position = strstr(filteredInf, findwind_degree);
	if( position == NULL )
    {
        fprintf(stderr,"\nERROR, can't find the string");
        return -1;
    }
	else
		i = strlen(findwind_degree);
	while(position[i] != '}')
	{
		i++;
		sizeofstring++;
	}
	wind_degree = malloc (sizeof(char) * (sizeofstring + 1));
	if(wind_speed == NULL)
	{
		fprintf(stderr,"\nERROR, can't create dyn table");
		return -1;
	}
	for(j = 0; j < sizeofstring; j++)
	wind_degree[j] = position[strlen(findwind_degree)+j];
	wind_degree[sizeofstring] = '\0';
	sizeofstring = 0;
	
	//sun_sunrise
	position = strstr(filteredInf, findsun_sunrise);
	if( position == NULL )
    {
        fprintf(stderr,"\nERROR, can't find the string");
        return -1;
    }
	else
		i = strlen(findsun_sunrise);
	while(position[i] != ',')
	{
		i++;
		sizeofstring++;
	}
	sun_sunrise = malloc (sizeof(char) * (sizeofstring + 1));
	if(sun_sunrise == NULL)
	{
		fprintf(stderr,"\nERROR, can't create dyn table");
		return -1;
	}
	for(j = 0; j < sizeofstring; j++)
	sun_sunrise[j] = position[strlen(findsun_sunrise)+j];
	sun_sunrise[sizeofstring] = '\0';
	sizeofstring = 0;
	
	//sun_sunset
	position = strstr(filteredInf, findsun_sunset);
	if( position == NULL )
    {
        fprintf(stderr,"\nERROR, can't find the string");
        return -1;
    }
	else
		i = strlen(findsun_sunset);
	while(position[i] != ',')
	{
		i++;
		sizeofstring++;
	}
	sun_sunset = malloc (sizeof(char) * (sizeofstring + 1));
	if(sun_sunset == NULL)
	{
		fprintf(stderr,"\nERROR, can't create dyn table");
		return -1;
	}
	for(j = 0; j < sizeofstring; j++)
	sun_sunset[j] = position[strlen(findsun_sunset)+j];
	sun_sunset[sizeofstring] = '\0';
	sizeofstring = 0;
	
	//dt
	position = strstr(filteredInf, finddt);
	if( position == NULL )
    {
        fprintf(stderr,"\nERROR, can't find the string");
        return -1;
    }
	else
		i = strlen(finddt);
	while(position[i] != ',')
	{
		i++;
		sizeofstring++;
	}
	dt = malloc (sizeof(char) * (sizeofstring + 1));
	if(dt == NULL)
	{
		fprintf(stderr,"\nERROR, can't create dyn table");
		return -1;
	}
	for(j = 0; j < sizeofstring; j++)
	dt[j] = position[strlen(finddt)+j];
	dt[sizeofstring] = '\0';
	sizeofstring = 0;
	
	printf("\n%d,%d,%s",strlen(findhumidity),sizeofstring,description);
	// Passage à la partie SQL
    
    MYSQL sql;
    mysql_init(&sql);
    mysql_options(&sql,MYSQL_READ_DEFAULT_GROUP,"option");
    if(mysql_real_connect(&sql,"127.0.0.1","root","aenprojectx","aen",0,NULL,0))
    {
    	  mysql_query(&sql, "SET NAMES 'utf8'");
          char marequete[600] = "";
          // On stock la requête dans notre tableau de CHAR
          sprintf(marequete, "INSERT INTO meteo VALUES('','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')"
                  ,weather,description,temp_now,pressure,humidity,temp_min,temp_max,visibility,wind_speed,wind_degree,sun_sunrise,sun_sunset,dt);
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

int findcontentlen(char *buffer)
{
	printf("\nfindcontentlen");
    char *a = "Content-Length: ";
    char *b = "Connection: ";
    char *position1 = NULL;
    char *position2 = NULL;
    char *stringcontentlen = NULL;
    int i;
    int contentlen = 0;
    int contentstringlen = 0;

    position1 = strstr(buffer, a);
    if( position1 == NULL )
    {
        fprintf(stderr,"\nERROR, can't find the string a");
        return -1;
    }

    position2 = strstr(buffer, b);
    if( position2 == NULL )
    {
        fprintf(stderr,"\nERROR, can't find the string b");
        return -1;
    }

    contentstringlen = position2 - (position1 + strlen(a) + 2);

    stringcontentlen = malloc(sizeof(char) * (contentstringlen + 1));
    if( stringcontentlen == NULL )
    {
        fprintf(stderr,"\nERROR, can't create the string content length");
        return -1;
    }

    for (i = 0; i < contentstringlen; i++)
        stringcontentlen[i] =  *(position1 + strlen(a) + i);

    stringcontentlen[contentstringlen] = '\0';
    contentlen = atoi(stringcontentlen);
    free(stringcontentlen);

    return contentlen;
}

int filterinf(char *buffer, char *filteredInf)
{
	printf("\nfilterinf");
    int i=0;
    int j = 0;
    int start_writing = FALSE;
    int contentlen = 0;

    contentlen = findcontentlen( buffer );
    if( contentlen == -1)
        return -1;

    while(j < contentlen)
    {
        if(buffer[i] == '{')
            start_writing = TRUE;

        if(start_writing == TRUE)
        {
            filteredInf[j] = buffer[i];
            j++;
        }
        i++;
    }

    if(filteredInf[contentlen - 1] != '}')
    {
        fprintf(stderr,"\nERROR, in the data");
        return -1;
    }
    filteredInf[contentlen] = '\0';

    return 0;
}

int writeInfo(char *buffer)
{
	printf("\nwriteinfo");
    char filteredInf[API_SIZE];
	
    FILE * weather = NULL;

    if(filterinf(buffer, filteredInf) == -1)
        return -1;

	parseJSON(filteredInf);
    //printf("\n\n%s",filteredInf);
    weather = fopen("weather.json", "w");
	printf("\nl97");
    if(weather == NULL)
    {
        fprintf(stderr,"\nERROR, cannot create the weather file");
        return -1;
    }
    if(fwrite(filteredInf, 1, strlen(filteredInf), weather) < strlen(filteredInf))
    {
        fprintf(stderr,"\nERROR, the weather file wasn't write properly");
        return -1;
    }
	printf("\nl108");
    fclose(weather);
	printf("\nl110");
    printf("\nThe weather.json was created properly");
	return 0;
}
