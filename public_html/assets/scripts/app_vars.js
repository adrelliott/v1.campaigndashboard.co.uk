/* 
 * Sets up the vars for the app.js file
 * 
 * We can overwrite these by putting a client file in 
 * assets/includes/bespoke_app_vars/{dID}_app_vars.js
 * 
 */

var globalOptions = {};

$(document).ready(function() {
    
    /* Set up Datatables */
     globalOptions.iDisplayLength = 10; //no of rows to display on normal tables
     globalOptions.iDisplayLength_ajax = 5; //no of rows to display on ajax tables
     
     
     /* Autocompletes */
     globalOptions.sectorList = [
     "Accountant", "Agricultural", "Architect", "Motor Vehicles", "Business Advisors", "Car sales", "Catering/Hospitality/Travel", "Charity", "Chartered Building Surveyers", "Child care / Nursery", "Childcare", "Cleaning company", "Debt Management", "Dental", "Designers", "Distributor", "Education", "Energy", "Engineers", "Engineers/Heating & plumbing", "Finance / Investment", "Financial Advisor", "Financial Planning", "Health & beauty", "Health & wellbeing", "Health Care", "IT", "Maintenance", "Manufacturing", "Marketing", "Medical", "Medical (wholesale)", "Mortgages", "Nuclear", "Office Space", "Pharmaceutical / Chemical", "Printers", "Promotion", "Property Company", "Recruitment", "Retail", "Service Plan Provider", "Solicitor", "Sport", "Surveyors", "Training", "Vets"
     ];
     
     globalOptions.countryList_uk = [
     "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo, Democratic Republic", "Congo, Republic of the", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco", "Monaco", "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Samoa", "San Marino", " Sao Tome", "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
     ];
   
});

