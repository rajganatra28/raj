

       function populateStates() {
            var countrySelect = document.getElementById("country");
            var stateSelect = document.getElementById("state");
            var selectedCountry = countrySelect.value;

            stateSelect.innerHTML = ""; // Clear existing options
            if (selectedCountry === "India") {
                var states = ["Gujarat", "Uttar Pradesh", "Tamil Nadu", "Karnataka", "Maharashtra"];
            } else if (selectedCountry === "Canada") {
                var states = ["Ontario", "Quebec", "British Columbia", "Alberta", "Manitoba"];
            } else if (selectedCountry === "UK") {
                var states = ["London", "Manchester", "Birmingham", "Glasgow", "Edinburgh"];
            } else if (selectedCountry === "Australia") {
                var states = ["New South Wales", "Victoria", "Queensland", "Western Australia", "South Australia"];
            } else if (selectedCountry === "USA") {
                var states = ["New York", "California", "Texas", "Florida", "Illinois"];
            }

            for (var i = 0; i < states.length; i++) {
                var option = document.createElement("option");
                option.text = states[i];
                option.value = states[i];
                stateSelect.add(option);
            }
        }

        function populateCities() {
            var stateSelect = document.getElementById("state");
            var citySelect = document.getElementById("city");
            var selectedState = stateSelect.value;

            citySelect.innerHTML = ""; // Clear existing options
    
            //  India stater 
            if (selectedState === "Gujarat") {
                var cities = ["Rajkot", "Jmanagar", "Surat", "Ahmedabad", "Bhavnagar"];
            } else if (selectedState === "Uttar Pradesh") {
                var cities = ["Lucknow", "Kanpur", "Varanasi", "Agra", "Meerut"];
            } else if (selectedState === "Tamil Nadu") {
                var cities = ["Chennai", "Coimbatore", "Madurai", "Tiruchirappalli", "Salem"];
            } else if (selectedState === "Karnataka") {
                var cities = ["Bangalore", "Mysore", "Hubli-Dharwad", "Mangalore", "Belgaum"];
            } else if (selectedState === "Maharashtra") {
                var cities = ["Mumbai", "Pune", "Nagpur", "Nashik", "Aurangabad"];
            } // Similarly add cities for other states

            //canada
            else if (selectedState === "Ontario") {
                var cities = ["Toronto", "Ottawa", "Mississauga", "Hamilton", "London"];
            } else if (selectedState === "Quebec") {
                var cities = ["Montreal", "Quebec City", "Laval", "Gatineau", "Longueuil"];
            } else if (selectedState === "British Columbia") {
                var cities = ["Vancouver", "Surrey", "Burnaby", "Richmond", "Abbotsford"];
            } else if (selectedState === "Alberta") {
                var cities = ["Calgary", "Edmonton", "Red Deer", "Lethbridge", "St. Albert"];
            } else if (selectedState === "Manitoba" ) {
                var cities = ["Winnipeg", "Brandon", "Steinbach", "Thompson", "Portage la Prairie"];
            } // Similarly add cities for other states


            //UK
             else if (selectedState === "London") {
                var cities = ["London", "Camden", "Greenwich", "Hackney", "Hammersmith"];
            } else if (selectedState === "Manchester" ) {
                var cities = ["Manchester", "Bolton", "Oldham", "Rochdale", "Salford"];
            } else if (selectedState === "Birmingham") {
                var cities = ["Birmingham", "Coventry", "Dudley", "Sandwell", "Solihull"];
            } else if (selectedState === "Glasgow" ) {
                var cities = ["Glasgow", "East Kilbride", "Hamilton", "Clydebank", "Bearsden"];
            } else if (selectedState === "Edinburgh") {
                var cities = ["Edinburgh", "Leith", "Dunfermline", "Livingston", "Cumbernauld"];
            } // Similarly add cities for other states

            //Austrlia
            else if (selectedState === "New South Wales" ) {
                var cities = ["Sydney", "Newcastle", "Central Coast", "Wollongong", "Maitland"];
            } else if (selectedState ==="Victoria") {
                var cities = ["Melbourne", "Geelong", "Ballarat", "Bendigo", "Sheppartongeles", "San Francisco", "San Diego", "Sacramento", "San Jose"];
            } else if (selectedState === "Western Australia") {
                var cities = ["Perth", "Mandurah", "Bunbury", "Geraldton", "Albany"];
            } else if (selectedState === "South Australia") {
                var cities = ["Adelaide", "Mount Gambier", "Whyalla", "Murray Bridge", "Port Augusta"];
            } else if (selectedState === "Queensland" ) {
                var cities = ["Brisbane", "Gold Coast", "Sunshine Coast", "Townsville", "Cairns"];
            } // Similarly add cities for other states

            //USA
            else if (selectedState === "New York") {
                var cities = ["New York City", "Buffalo", "Rochester", "Yonkers", "Syracuse"];
            } else if (selectedState === "California") {
                var cities = ["Los Angeles", "San Francisco", "San Diego", "Sacramento", "San Jose"];
            } else if (selectedState === "Texas") {
                var cities = ["Houston", "Dallas", "Austin", "San Antonio", "Fort Worth"];
            } else if (selectedState === "Florida") {
                var cities = ["Miami", "Orlando", "Tampa", "Jacksonville", "Fort Lauderdale"];
            } else if (selectedState === "Illinois") {
                var cities = ["Chicago", "Springfield", "Peoria", "Rockford", "Aurora"];
            } // Similarly add cities for other states

            for (var i = 0; i < cities.length; i++)
             {
                var option = document.createElement("option");
                option.text = cities[i];
                option.value = cities[i];
                citySelect.add(option);
            }
        }
