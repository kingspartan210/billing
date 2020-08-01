/*!
                        Edit Approval list
-------------------------------------------------------------------*/

// Contact
$(document).ready(function () {
    var counter = 0;

    $("#addcontact").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td>1</td>';
        cols += '<td><input type="text" class="form-control"/></td>';
        cols += '<td><input type="text" class="form-control" /></td>';
        
        cols += '<td><input type="text" class="form-control" /></td>'
        cols += '<td><input type="text" class="form-control" /></td>'

        cols += '<td><input type="button" class="contactDel btn btn-sm btn-danger "  value="X"></td>';
        newRow.append(cols);
        $("table.contact-list").append(newRow);
        counter++;
    });



    $("table.contact-list").on("click", ".contactDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});

// Taxes
$(document).ready(function () {
    var counter = 0;

    $("#taxes").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td>1</td>';
        cols += ' <td><input type="text" class="form-control"/></td>';
        cols += '<td><input type="text" value="0.000" class="form-control"/></td>';
        
        cols += '<td><select name="" class="form-control"><option value="">Myanmar Kyat</option><option value="">US Dollar</option></select></td>'
        

        cols += '<td><input type="button" class="taxeDel btn btn-sm btn-danger "  value="X"></td>';
        newRow.append(cols);
        $("table.taxes-list").append(newRow);
        counter++;
    });



    $("table.taxes-list").on("click", ".taxeDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});
// Capital
$(document).ready(function () {
    var counter = 0;

    $("#addcapital").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += ' <td>1</td>';
        cols += ' <td><input type="text" class="form-control"/></td>';
        cols += ' <td><input type="text" class="form-control"/></td>';
        cols += ' <td><input type="text" class="form-control"/></td>';
        cols += ' <td>0.000</td>';
        cols += ' <td><input type="text" class="form-control"/></td>';
        cols += ' <td><input type="text" class="form-control"/></td>';
        cols += ' <td>223.99</td>';
        cols += ' <td>223.99</td>';
        
        
        

        cols += '<td><input type="button" class="capitalDel btn btn-sm btn-danger "  value="X"></td>';
        newRow.append(cols);
        $("table.capital-list").append(newRow);
        counter++;
    });



    $("table.capital-list").on("click", ".capitalDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});
// ManPower
$(document).ready(function () {
    var counter = 0;

    $("#manpower").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td>1</td>';
        cols += ' <td><input type="text" class="form-control"/></td>';
        cols += '<td><div class="form-group"><div class="input-group"><input type="text" class="form-control" value="10580.708"><select class=" form-control"><option value="">US Dollar</option><option value="">Myanmar Kyat</option></select></div></div></td>';
        
        cols += ' <td><input type="text" class="form-control"/></td>';
        cols += ' <td><input type="text" class="form-control"/></td>';


        cols += '<td><input type="button" class="manpowerDel btn btn-sm btn-danger "  value="X"></td>';
        newRow.append(cols);
        $("table.manpower-list").append(newRow);
        counter++;
    });



    $("table.manpower-list").on("click", ".manpowerDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});
/*!
                        Actual
-------------------------------------------------------------------*/

// Loan
$(document).ready(function () {
    var counter = 0;

    $("#loan").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td>1</td>';
        cols += '<td><input type="text" class="form-control"/></td>';
        cols += '<td>0.000</td>';
        cols += '<td>0.000</td>';
        cols += '<td><input type="text" class="form-control" value="0.000"/></td>';
        cols += '<td><input type="text" class="form-control" value="0.000" /></td>';
        

        cols += '<td><input type="button" class="loanDel btn btn-sm btn-danger "  value="X"></td>';
        newRow.append(cols);
        $("table.loan-list").append(newRow);
        counter++;
    });



    $("table.loan-list").on("click", ".loanDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});
//Production
$(document).ready(function () {
    var counter = 0;

    $("#production").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td>1</td>';
        cols += '<td><input type="text" class="form-control"/></td>';
        cols += '<td><input type="text" class="form-control"/></td>';
        cols += '<td><input type="text" class="form-control" value="0"/></td>';
        cols += '<td><input type="text" class="form-control" value="0.000"/></td>';
        cols += '<td><input type="text" class="form-control" value="0.000"/></td>';

        

        cols += '<td><input type="button" class="productionDel btn btn-sm btn-danger "  value="X"></td>';
        newRow.append(cols);
        $("table.production-list").append(newRow);
        counter++;
    });



    $("table.production-list").on("click", ".productionDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});
//Receipt From Operation
$(document).ready(function () {
    var counter = 0;

    $("#receipt_from_operation").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td>1</td>';
        
        cols += '<td><input type="text" class="form-control"/></td>';
        cols += '<td><input type="text" class="form-control" value="0.000"/></td>';
        cols += '<td><input type="text" class="form-control" value="0.000"/></td>';
        cols += '<td><input type="text" class="form-control" value="0.000"/></td>';
        cols += '<td>0.000</td>';

        

        cols += '<td><input type="button" class="receiptDel btn btn-sm btn-danger "  value="X"></td>';
        newRow.append(cols);
        $("table.receipt-from-operation").append(newRow);
        counter++;
    });



    $("table.receipt-from-operation").on("click", ".receiptDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});
//Cost of Operation
$(document).ready(function () {
    var counter = 0;

    $("#cost").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td>1</td>';
        
        cols += '<td><input type="text" class="form-control"/></td>';
        cols += '<td><input type="text" class="form-control" value="0"/></td>';
        
        cols += '<td><input type="text" class="form-control" value="0.000"/></td>';

        

        cols += '<td><input type="button" class="costDel btn btn-sm btn-danger "  value="X"></td>';
        newRow.append(cols);
        $("table.cost-list").append(newRow);
        counter++;
    });



    $("table.cost-list").on("click", ".costDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});
//Manpower
$(document).ready(function () {
    var counter = 0;

    $("#actualmanpower").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td>1</td>';
        cols += '<td><input type="text" class="form-control"/></td>';
        cols += '<td>0.000</td>';
        cols += '<td></td>';
        cols += '<td></td>';
        cols += '<td><div class="form-group"><div class="input-group"><input type="text" class="form-control" ><select class=" form-control"><option value="">US Dollar</option><option value="">Myanmar Kyat</option></select></div></div></td>';
        
        cols += '<td><input type="text" class="form-control" value="0"/></td>';
        
        cols += '<td><input type="text" class="form-control" value="0"/></td>';

        

        cols += '<td><input type="button" class="actualmanpowerDel btn btn-sm btn-danger "  value="X"></td>';
        newRow.append(cols);
        $("table.actualmanpower-list").append(newRow);
        counter++;
    });



    $("table.actualmanpower-list").on("click", ".actualmanpowerDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});
//Financial Position
$(document).ready(function () {
    var counter = 0;

    $("#financial").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td>1</td>';    
        cols += '<td><input type="text" class="form-control"/></td>';
            cols += '<td><input type="text" class="form-control" value="0.000"/></td>';
        cols += '<td><input type="text" class="form-control" value="0.000"/></td>';

        

        cols += '<td><input type="button" class="financialDel btn btn-sm btn-danger "  value="X"></td>';
        newRow.append(cols);
        $("table.financial-list").append(newRow);
        counter++;
    });



    $("table.financial-list").on("click", ".financialDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});
//Construction Period
$(document).ready(function () {
    var counter = 0;

    $("#construction").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td>1</td>';    
        cols += '<td><input type="text" class="form-control"/></td>';
        cols += '<td><div class="input-group"><input type="text" class="form-control"><select class=" form-control"><option value="">US Dollar</option><option value="">Myanmar Kyat</option></select></div></td>';
        cols += '<td><input type="date" class="form-control"/></td>';
        cols += '<td></td>';
        cols += '<td><input type="date" class="form-control"/></td>';
        cols += '<td><input type="text" class="form-control"/></td>';

        

        cols += '<td><input type="button" class="constructionDel btn btn-sm btn-danger "  value="X"></td>';
        newRow.append(cols);
        $("table.construction-list").append(newRow);
        counter++;
    });



    $("table.construction-list").on("click", ".constructionDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});
//Commercial Operation
$(document).ready(function () {
    var counter = 0;

    $("#commercial").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td>1</td>';    
        cols += '<td><input type="text" class="form-control"/></td>';
        cols += '<td><div class="input-group"><input type="text" class="form-control"><select class=" form-control"><option value="">US Dollar</option><option value="">Myanmar Kyat</option></select></div></td>';
        cols += '<td><input type="date" class="form-control"/></td>';
        cols += '<td></td>';
        cols += '<td><input type="date" class="form-control"/></td>';
        cols += '<td><input type="text" class="form-control"/></td>';

        

        cols += '<td><input type="button" class="commercialDel btn btn-sm btn-danger "  value="X"></td>';
        newRow.append(cols);
        $("table.commercial-list").append(newRow);
        counter++;
    });



    $("table.commercial-list").on("click", ".commercialDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});
//Inspection
$(document).ready(function () {
    var counter = 0;

    $("#inspection").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td>1</td>';   
        cols += '<td><input type="date" class="form-control"/></td>';
        cols += '<td><input type="text" class="form-control"/></td>';
        cols += '<td><input type="text" class="form-control"/></td>';
        cols += '<td><textarea class="mt-1" cols="35" rows="2" style="border-color: #ebedf2;"></textarea></td>'

        

        cols += '<td><input type="button" class="inspectionDel btn btn-sm btn-danger "  value="X"></td>';
        newRow.append(cols);
        $("table.inspection-list").append(newRow);
        counter++;
    });



    $("table.inspection-list").on("click", ".inspectionDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});
//JV Percentage
// $(document).ready(function () {
//     var counter = 0;

//     $("#jv-percentage").on("click", function () {
//         var newRow = $("<tr>");
//         var cols = "";

//         cols += '<td>1</td>';   
//         cols += '<td><input type="text" class="form-control"/></td>';
//         cols += '<td><div class="form-group"><select class=" form-control"><option value="">Afghanistan</option<option value="">Albania</option><option value="">Algeria</option><option value="">American Samoa</option><option value="">Andorra</option><option value="">Angola</option><option value="">Anguilla</option><option value="">Antarctica</option><option value="">Antigua and Barbuda</option><option value="">Argentina</option><option value="">Armenia</option><option value="">Aruba</option><option value="">Australia</option><option value="">Austria</option><option value="">Azerbaijan</option><option value="">Bahamas</option><option value="">Bahrain</option><option value="">Bangladesh</option><option value="">Barbados</option><option value="">Belarus</option><option value="">Belgium</option><option value="">Belize</option><option value="">Benin</option><option value="">Bermuda</option><option value="">Bhutan</option><option value="">Bolivia (Plurinational State of )</option><option value="">Bosnia, Sint Eustatius and Saba</option><option value="">Bosnia and Herzegovina</option><option value="">Botswana</option><option value="">Bouvet Island</option><option value="">Brazil</option><option value="">British Indian Ocean Territory</option><option value="">Brunei Darussslam</option><option value="">Bulgaria</option><option value="">Burkina Faso</option><option value="">Burundi</option><option value="">Cabo Verde</option><option value="">Cambodia</option><option value="">Cameroon</option><option value="">Canada</option><option value="">Cayman Islands</option><option value="">Central African Republic</option><option value="">Chad</option><option value="">Chile</option><option value="">China</option><option value="">Christmas Island</option><option value="">Cocos (Keeling) Islands</option><option value="">Colombia</option><option value="">Comoros</option><option value="">Congo (Democratic Republic of the)</option><option value="">Congo (Republic of the)</option><option value="">Cook Islands</option><option value="">Cote dlvoire</option><option value="">Croatia</option><option value="">Cuba</option><option value="">Curacao</option><option value="">Cyprus</option><option value="">Czech Republic</option><option value="">Denmark</option><option value="">Djibouti</option><option value="">Dominica</option><option value="">Dominican Republic</option><option value="">Ecuador</option><option value="">Egypt</option><option value="">El Salvador</option><option value="">Equatorial Guinea</option><option value="">Eritrea</option><option value="">Estonia</option><option value="">Ethiopia</option><option value="">Falkland Islands (Malvinas)</option><option value="">Faroe Islands</option><option value="">Fiji</option><option value="">Finland</option><option value="">France</option><option value="">French Guiana</option><option value="">French Polynesia</option><option value="">French Southern Territories</option><option value="">Gabon</option><option value="">Gambia</option><option value="">Georgia</option><option value="">Germany</option><option value="">Ghana</option><option value="">Gibraltar</option><option value="">Greece</option><option value="">Greenland</option><option value="">Grenada</option><option value="">Guadeloupe</option><option value="">Guam</option><option value="">Guatemala</option><option value="">Guernsey</option><option value="">Guinea</option><option value="">Guinea-Bissau</option><option value="">Guyana</option><option value="">Haiti</option><option value="">Heard Island and McDonald Island</option><option value="">Honduras</option><option value="">Hong Kong</option><option value="">Hungary</option><option value="">Iceland</option><option value="">India</option><option value="">Indonesia</option><option value="">Iran</option><option value="">Iraq</option><option value="">Ireland</option><option value="">Isle of Man</option><option value="">Israel</option><option value="">Italy</option><option value="">Jamaica</option><option value="">Japan</option><option value="">Jersey</option><option value="">Jordan</option><option value="">Kazakhstan</option><option value="">Kenya</option><option value="">Kiribati</option><option value="">Korea (Democratic People's Republic of)</option><option value="">Korea (Republic of)</option><option value="">Kuwait</option><option value="">Kyrgyzstan</option><option value="">Lao People's Democratic Republic</option><option value="">Latvia</option><option value="">Lebanon</option><option value="">Lesotho</option><option value="">Liberia</option><option value="">Libya</option><option value="">Liechtenstein</option><option value="">Lithuanian</option><option value="">Luxembourg</option><option value="">Macao</option><option value="">Macedonia (the former Yugoslav Republic of)</option><option value="">Madagascar</option><option value="">Malawi</option><option value="">Malaysia</option><option value="">Maldives</option><option value="">Puerto Rico</option><option value="">Qatar</option><option value="">Reunion</option><option value="">Romania</option><option value="">Russian Federation</option><option value="">Rwanda</option><option value="">Saint Barthelemy</option><option value="">Saint Helena, Ascension and Tristan da Cunda</option><option value="">Saint Kitts and Nevis</option><option value="">Saint Lucia</option><option value="">Saint Martin (French part)</option><option value="">Saint Pierre and Miquelon</option><option value="">Saint Vincent and the Grenadines</option><option value="">Samoa</option><option value="">San Marino</option><option value="">Sao Tome and Principe</option><option value="">Saudi Arabia</option><option value="">Senegal</option><option value="">Serbia</option><option value="">Seychelles</option><option value="">Sierra Leone</option><option value="">Singapore</option><option value="">Sint Maarten (Dutch part)</option><option value="">Slovakia</option><option value="">Slovania</option><option value="">Solomon Islands</option><option value="">Somalia</option><option value="">South Africa</option><option value="">South Georgia and the South Sandwich Islands</option><option value="">South Sudan</option><option value="">Spain</option><option value="">Sri Lanka</option><option value="">Sudan</option><option value="">Suriname</option><option value="">Svalbard and Jan Mayen</option><option value="">Swaziland</option><option value="">Sweden</option><option value="">Switzerland</option><option value="">Syrian Arab Republic</option><option value="">Taiwan, Province of China</option><option value="">Tajikistan</option><option value="">Tanzania, United Republic of</option><option value="">Thailand</option><option value="">Timor-Leste</option><option value="">Togo</option><option value="">Tokelau</option><option value="">Tonga</option><option value="">Trinidad and Tobago</option><option value="">Tunisia</option><option value="">Turkey</option><option value="">Turkmenistan</option><option value="">Turks and Caicos Islands</option><option value="">Tuvalu</option><option value="">Uganda</option><option value="">Ukraine</option><option value="">United Arab Emirates</option><option value="">United Kingdom of Great Britain and Northern Ireland</option><option value="">United States Minor Outlying Islands</option><option value="">United States of America</option><option value="">Uruguay</option><option value="">Uzbekistan</option><option value="">Vanuatu</option><option value="">Vatican City State</option><option value="">Venezuela (Bolivarian Republic of)</option><option value="">Vietnam</option><option value="">Virgin Islands (British)</option><option value="">Virgin Islands (U.S.)</option><option value="">Wallis and Futuna</option><option value="">Western Sahara</option><option value="">Yemen</option><option value="">Zambia</option><option value="">Zimbabwe</option></select></div></td>';
//         cols += '<td><input type="text" class="form-control"/></td>';
        
//         cols += '<td><input type="button" class="jvDel btn btn-sm btn-danger "  value="X"></td>';
//         newRow.append(cols);
//         $("table.jv-percentage-list").append(newRow);
//         counter++;
//     });



//     $("table.jv-percentage-list").on("click", ".jvDel", function (event) {
//         $(this).closest("tr").remove();       
//         counter -= 1
//     });


// });