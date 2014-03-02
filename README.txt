*********************************************************************
  __  __                  _               _____       _             *
 |  \/  |                (_)             |  __ \     (_)            *
 | \  / | ___  _ __ _ __  _ _ __   __ _  | |  | |_ __ ___   _____   *
 | |\/| |/ _ \| '__| '_ \| | '_ \ / _` | | |  | | '__| \ \ / / _ \  *
 | |  | | (_) | |  | | | | | | | | (_| | | |__| | |  | |\ V /  __/  *
 |_|  |_|\___/|_|  |_| |_|_|_| |_|\__, | |_____/|_|  |_| \_/ \___|  *
                                   __/ |                            *
                                  |___/                             *
*********************************************************************


Team Name: City Reality

Team Members: Peter LeBlanc and Anthony Tomassetti


//This software was made using open data under Canada's Open Government
//Licence. Full details can be found at http://data.gc.ca/eng/open-government-licence-canada



Morning Drive is a web application meant to give users information on the fuel consumption
of their car in regards to a specific trip. Using Fuel Consumption data provided by
Natural Resources Canada, users can select any car sold in canada between 2000 and 2014.
Utilizing smartphone gps capabilites we retrive your location, and users can then type a
destination. We implement the Google Maps api in order to retireve an accurate distance
between the points, and detrime how much fuel the trip will use based on those two values.
Once we have the users location, we also cross refrence it with data provided by StatsCan
on average retail prices of gasoline and diesel in order to get an accurate guess as to
cost in dollars of the trip. As an added feature, we use  the Meteorological Service of Canada
provided by Enviroment Canada in conjunction with google maps to display an accurate weather
report along with information regarding your trip.


Morning Drive was developed as a web app, primarily with HTML5, Javascript, PHP and Ajax. 
Because this app uses server side technology, you must access it via a
smartphone through its link at


****************************************

http://www.qrworkplace.com/codemain.html

****************************************


This app will not run locally as our server handles all PHP. This is app was also only optimized for
mobile smartphones and will not run in a desktop enviroment. The app is currently sitting on our test
server which we maintain and will remain up until the event is long over. We decided on a web app because
we liked the multiplatform aspect of it. Although it was difficult to make sure  the browser support was 
good, the site is tested and working on a variety of modern devices including iPhone 5s , Galaxy Note 3 and
Black Berry Z10.

Most bugs have been squashed however you still may encounter one or two. Closing the tab and navigating to the
the main page (as linked above) will solve most issues.



##########################################################
#    _____        _           _____      _               #
#   |  __ \      | |         / ____|    | |              #
#   | |  | | __ _| |_ __ _  | (___   ___| |_ ___         # 
#   | |  | |/ _` | __/ _` |  \___ \ / _ \ __/ __|        #
#   | |__| | (_| | || (_| |  ____) |  __/ |_\__ \        #
#   |_____/ \__,_|\__\__,_| |_____/ \___|\__|___/        #
#                                                        #
##########################################################                                                



Fuel Consumption
http://data.gc.ca/data/en/dataset/98f1a129-f628-4ce4-b24d-6f16bf24dd64

Gasoline Prices
http://data.gc.ca/data/en/dataset/9285b394-a929-4f5f-85c8-81518ca541e5

Meteorological Service of Canada MSC
http://data.gc.ca/data/en/dataset/1f864766-7f7f-4be7-8292-295065c65c78

Google Maps Directions API
https://developers.google.com/maps/documentation/directions/
