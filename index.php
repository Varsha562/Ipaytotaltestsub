

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="https://ipaytotal.solutions/newTheme/assets/img/logo01.png">
    <title>Ipaytotal Checkout Form</title>
    <link href="https://ipaytotal.solutions/newTheme/assets/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://ipaytotal.solutions/newTheme/assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="https://ipaytotal.solutions/newTheme/assets/lib/select2/css/select2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://ipaytotal.solutions/newTheme/assets/css/dashforge.css">
    <link rel="stylesheet" href="https://ipaytotal.solutions/newTheme/assets/css/dashforge.demo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <style type="text/css">
        footer ul{
            margin: 0px;
        }
        footer li{
            float: left;
            list-style: none;
            height: 60px;
            position: relative;
            width: 80px;
        }
        footer li img{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
        .content-fixed1{
            margin-top: 0px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
              <img src="https://ipaytotal.solutions/newTheme/assets/img/logo.png" class="img-fluid" alt="ipaytotal" width="250px" style="margin: auto; padding: 10px 0;">
              </div>
            <div class="col-md-12">
                    <div class="portlet-body form">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <div data-label="Billing Info" class="df-example demo-forms">
                                      <form method="POST" action="Ipaytotal2.php" id="first">
                                        <div class="row">
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>First Name <code style="font-weight: 900; font-size: 20px;">*</code></label>
                                                    <input class="form-control spinner" name="first_name" type="text" id="first_name" placeholder="First Name" value=""  required>
                                                  </div>
                                            </div>
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Last Name <code style="font-weight: 900; font-size: 20px;">*</code></label>
                                                    <input class="form-control spinner" name="last_name" type="text" id="last_name" placeholder="Last Name" value=""  required>
                                              </div>
                                            </div>
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Address <code style="font-weight: 900; font-size: 20px;">*</code></label>
                                                    <input class="form-control spinner" name="address" type="text" id="address" placeholder="Address" value=""  required>
                                                  </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Customer Order ID Number <code style="font-weight: 900; font-size: 20px;">*</code></label>
                                                    <input class="form-control spinner" name="sulte_apt_no" type="text" placeholder="Customer Order ID Number" value=""  required>
                                                </div>
                                            </div>


                                              <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Country <code style="font-weight: 900; font-size: 20px;">*</code></label>
                                                      <select class="form-control select2" name="country" id="country11" required>
                                                        <option selected disabled> -- Select Country Type -- </option>
                                                                                                                    <option value="AF">Afghanistan</option>
                                                                                                                    <option value="AX">Åland Islands</option>
                                                                                                                    <option value="AL">Albania</option>
                                                                                                                    <option value="DZ">Algeria</option>
                                                                                                                    <option value="AS">American Samoa</option>
                                                                                                                    <option value="AD">Andorra</option>
                                                                                                                    <option value="AO">Angola</option>
                                                                                                                    <option value="AI">Anguilla</option>
                                                                                                                    <option value="AQ">Antarctica</option>
                                                                                                                    <option value="AG">Antigua and Barbuda</option>
                                                                                                                    <option value="AR">Argentina</option>
                                                                                                                    <option value="AM">Armenia</option>
                                                                                                                    <option value="AW">Aruba</option>
                                                                                                                    <option value="AU">Australia</option>
                                                                                                                    <option value="AT">Austria</option>
                                                                                                                    <option value="AZ">Azerbaijan</option>
                                                                                                                    <option value="BS">Bahamas</option>
                                                                                                                    <option value="BH">Bahrain</option>
                                                                                                                    <option value="BD">Bangladesh</option>
                                                                                                                    <option value="BB">Barbados</option>
                                                                                                                    <option value="BY">Belarus</option>
                                                                                                                    <option value="BE">Belgium</option>
                                                                                                                    <option value="BZ">Belize</option>
                                                                                                                    <option value="BJ">Benin</option>
                                                                                                                    <option value="BM">Bermuda</option>
                                                                                                                    <option value="BT">Bhutan</option>
                                                                                                                    <option value="BO">Bolivia</option>
                                                                                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                                                                                    <option value="BW">Botswana</option>
                                                                                                                    <option value="BV">Bouvet Island</option>
                                                                                                                    <option value="BR">Brazil</option>
                                                                                                                    <option value="IO">British Indian Ocean Territory</option>
                                                                                                                    <option value="BN">Brunei Darussalam</option>
                                                                                                                    <option value="BG">Bulgaria</option>
                                                                                                                    <option value="BF">Burkina Faso</option>
                                                                                                                    <option value="BI">Burundi</option>
                                                                                                                    <option value="KH">Cambodia</option>
                                                                                                                    <option value="CM">Cameroon</option>
                                                                                                                    <option value="CA">Canada</option>
                                                                                                                    <option value="CV">Cape Verde</option>
                                                                                                                    <option value="KY">Cayman Islands</option>
                                                                                                                    <option value="CF">Central African Republic</option>
                                                                                                                    <option value="TD">Chad</option>
                                                                                                                    <option value="CL">Chile</option>
                                                                                                                    <option value="CN">China</option>
                                                                                                                    <option value="CX">Christmas Island</option>
                                                                                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                                                                                    <option value="CO">Colombia</option>
                                                                                                                    <option value="KM">Comoros</option>
                                                                                                                    <option value="CG">Congo</option>
                                                                                                                    <option value="CD">Congo, The Democratic Republic of The</option>
                                                                                                                    <option value="CK">Cook Islands</option>
                                                                                                                    <option value="CR">Costa Rica</option>
                                                                                                                    <option value="CI">Cote D&#039;ivoire</option>
                                                                                                                    <option value="HR">Croatia</option>
                                                                                                                    <option value="CU">Cuba</option>
                                                                                                                    <option value="CY">Cyprus</option>
                                                                                                                    <option value="CZ">Czech Republic</option>
                                                                                                                    <option value="DK">Denmark</option>
                                                                                                                    <option value="DJ">Djibouti</option>
                                                                                                                    <option value="DM">Dominica</option>
                                                                                                                    <option value="DO">Dominican Republic</option>
                                                                                                                    <option value="EC">Ecuador</option>
                                                                                                                    <option value="EG">Egypt</option>
                                                                                                                    <option value="SV">El Salvador</option>
                                                                                                                    <option value="GQ">Equatorial Guinea</option>
                                                                                                                    <option value="ER">Eritrea</option>
                                                                                                                    <option value="EE">Estonia</option>
                                                                                                                    <option value="ET">Ethiopia</option>
                                                                                                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                                                                                                    <option value="FO">Faroe Islands</option>
                                                                                                                    <option value="FJ">Fiji</option>
                                                                                                                    <option value="FI">Finland</option>
                                                                                                                    <option value="FR">France</option>
                                                                                                                    <option value="GF">French Guiana</option>
                                                                                                                    <option value="PF">French Polynesia</option>
                                                                                                                    <option value="TF">French Southern Territories</option>
                                                                                                                    <option value="GA">Gabon</option>
                                                                                                                    <option value="GM">Gambia</option>
                                                                                                                    <option value="GE">Georgia</option>
                                                                                                                    <option value="DE">Germany</option>
                                                                                                                    <option value="GH">Ghana</option>
                                                                                                                    <option value="GI">Gibraltar</option>
                                                                                                                    <option value="GR">Greece</option>
                                                                                                                    <option value="GL">Greenland</option>
                                                                                                                    <option value="GD">Grenada</option>
                                                                                                                    <option value="GP">Guadeloupe</option>
                                                                                                                    <option value="GU">Guam</option>
                                                                                                                    <option value="GT">Guatemala</option>
                                                                                                                    <option value="GG">Guernsey</option>
                                                                                                                    <option value="GN">Guinea</option>
                                                                                                                    <option value="GW">Guinea-bissau</option>
                                                                                                                    <option value="GY">Guyana</option>
                                                                                                                    <option value="HT">Haiti</option>
                                                                                                                    <option value="HM">Heard Island and Mcdonald Islands</option>
                                                                                                                    <option value="VA">Holy See (Vatican City State)</option>
                                                                                                                    <option value="HN">Honduras</option>
                                                                                                                    <option value="HK">Hong Kong</option>
                                                                                                                    <option value="HU">Hungary</option>
                                                                                                                    <option value="IS">Iceland</option>
                                                                                                                    <option value="IN">India</option>
                                                                                                                    <option value="ID">Indonesia</option>
                                                                                                                    <option value="IR">Iran, Islamic Republic of</option>
                                                                                                                    <option value="IQ">Iraq</option>
                                                                                                                    <option value="IE">Ireland</option>
                                                                                                                    <option value="IM">Isle of Man</option>
                                                                                                                    <option value="IL">Israel</option>
                                                                                                                    <option value="IT">Italy</option>
                                                                                                                    <option value="JM">Jamaica</option>
                                                                                                                    <option value="JP">Japan</option>
                                                                                                                    <option value="JE">Jersey</option>
                                                                                                                    <option value="JO">Jordan</option>
                                                                                                                    <option value="KZ">Kazakhstan</option>
                                                                                                                    <option value="KE">Kenya</option>
                                                                                                                    <option value="KI">Kiribati</option>
                                                                                                                    <option value="KP">Korea, Democratic People&#039;s Republic of</option>
                                                                                                                    <option value="KR">Korea, Republic of</option>
                                                                                                                    <option value="KW">Kuwait</option>
                                                                                                                    <option value="KG">Kyrgyzstan</option>
                                                                                                                    <option value="LA">Lao People&#039;s Democratic Republic</option>
                                                                                                                    <option value="LV">Latvia</option>
                                                                                                                    <option value="LB">Lebanon</option>
                                                                                                                    <option value="LS">Lesotho</option>
                                                                                                                    <option value="LR">Liberia</option>
                                                                                                                    <option value="LY">Libyan Arab Jamahiriya</option>
                                                                                                                    <option value="LI">Liechtenstein</option>
                                                                                                                    <option value="LT">Lithuania</option>
                                                                                                                    <option value="LU">Luxembourg</option>
                                                                                                                    <option value="MO">Macao</option>
                                                                                                                    <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                                                                                                    <option value="MG">Madagascar</option>
                                                                                                                    <option value="MW">Malawi</option>
                                                                                                                    <option value="MY">Malaysia</option>
                                                                                                                    <option value="MV">Maldives</option>
                                                                                                                    <option value="ML">Mali</option>
                                                                                                                    <option value="MT">Malta</option>
                                                                                                                    <option value="MH">Marshall Islands</option>
                                                                                                                    <option value="MQ">Martinique</option>
                                                                                                                    <option value="MR">Mauritania</option>
                                                                                                                    <option value="MU">Mauritius</option>
                                                                                                                    <option value="YT">Mayotte</option>
                                                                                                                    <option value="MX">Mexico</option>
                                                                                                                    <option value="FM">Micronesia, Federated States of</option>
                                                                                                                    <option value="MD">Moldova, Republic of</option>
                                                                                                                    <option value="MC">Monaco</option>
                                                                                                                    <option value="MN">Mongolia</option>
                                                                                                                    <option value="ME">Montenegro</option>
                                                                                                                    <option value="MS">Montserrat</option>
                                                                                                                    <option value="MA">Morocco</option>
                                                                                                                    <option value="MZ">Mozambique</option>
                                                                                                                    <option value="MM">Myanmar</option>
                                                                                                                    <option value="NA">Namibia</option>
                                                                                                                    <option value="NR">Nauru</option>
                                                                                                                    <option value="NP">Nepal</option>
                                                                                                                    <option value="NL">Netherlands</option>
                                                                                                                    <option value="AN">Netherlands Antilles</option>
                                                                                                                    <option value="NC">New Caledonia</option>
                                                                                                                    <option value="NZ">New Zealand</option>
                                                                                                                    <option value="NI">Nicaragua</option>
                                                                                                                    <option value="NE">Niger</option>
                                                                                                                    <option value="NG">Nigeria</option>
                                                                                                                    <option value="NU">Niue</option>
                                                                                                                    <option value="NF">Norfolk Island</option>
                                                                                                                    <option value="MP">Northern Mariana Islands</option>
                                                                                                                    <option value="NO">Norway</option>
                                                                                                                    <option value="OM">Oman</option>
                                                                                                                    <option value="PK">Pakistan</option>
                                                                                                                    <option value="PW">Palau</option>
                                                                                                                    <option value="PS">Palestinian Territory, Occupied</option>
                                                                                                                    <option value="PA">Panama</option>
                                                                                                                    <option value="PG">Papua New Guinea</option>
                                                                                                                    <option value="PY">Paraguay</option>
                                                                                                                    <option value="PE">Peru</option>
                                                                                                                    <option value="PH">Philippines</option>
                                                                                                                    <option value="PN">Pitcairn</option>
                                                                                                                    <option value="PL">Poland</option>
                                                                                                                    <option value="PT">Portugal</option>
                                                                                                                    <option value="PR">Puerto Rico</option>
                                                                                                                    <option value="QA">Qatar</option>
                                                                                                                    <option value="RE">Reunion</option>
                                                                                                                    <option value="RO">Romania</option>
                                                                                                                    <option value="RU">Russian Federation</option>
                                                                                                                    <option value="RW">Rwanda</option>
                                                                                                                    <option value="SH">Saint Helena</option>
                                                                                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                                                                                    <option value="LC">Saint Lucia</option>
                                                                                                                    <option value="PM">Saint Pierre and Miquelon</option>
                                                                                                                    <option value="VC">Saint Vincent and The Grenadines</option>
                                                                                                                    <option value="WS">Samoa</option>
                                                                                                                    <option value="SM">San Marino</option>
                                                                                                                    <option value="ST">Sao Tome and Principe</option>
                                                                                                                    <option value="SA">Saudi Arabia</option>
                                                                                                                    <option value="SN">Senegal</option>
                                                                                                                    <option value="RS">Serbia</option>
                                                                                                                    <option value="SC">Seychelles</option>
                                                                                                                    <option value="SL">Sierra Leone</option>
                                                                                                                    <option value="SG">Singapore</option>
                                                                                                                    <option value="SK">Slovakia</option>
                                                                                                                    <option value="SI">Slovenia</option>
                                                                                                                    <option value="SB">Solomon Islands</option>
                                                                                                                    <option value="SO">Somalia</option>
                                                                                                                    <option value="ZA">South Africa</option>
                                                                                                                    <option value="GS">South Georgia and The South Sandwich Islands</option>
                                                                                                                    <option value="ES">Spain</option>
                                                                                                                    <option value="LK">Sri Lanka</option>
                                                                                                                    <option value="SD">Sudan</option>
                                                                                                                    <option value="SR">Suriname</option>
                                                                                                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                                                                                                    <option value="SZ">Swaziland</option>
                                                                                                                    <option value="SE">Sweden</option>
                                                                                                                    <option value="CH">Switzerland</option>
                                                                                                                    <option value="SY">Syrian Arab Republic</option>
                                                                                                                    <option value="TW">Taiwan, Province of China</option>
                                                                                                                    <option value="TJ">Tajikistan</option>
                                                                                                                    <option value="TZ">Tanzania, United Republic of</option>
                                                                                                                    <option value="TH">Thailand</option>
                                                                                                                    <option value="TL">Timor-leste</option>
                                                                                                                    <option value="TG">Togo</option>
                                                                                                                    <option value="TK">Tokelau</option>
                                                                                                                    <option value="TO">Tonga</option>
                                                                                                                    <option value="TT">Trinidad and Tobago</option>
                                                                                                                    <option value="TN">Tunisia</option>
                                                                                                                    <option value="TR">Turkey</option>
                                                                                                                    <option value="TM">Turkmenistan</option>
                                                                                                                    <option value="TC">Turks and Caicos Islands</option>
                                                                                                                    <option value="TV">Tuvalu</option>
                                                                                                                    <option value="UG">Uganda</option>
                                                                                                                    <option value="UA">Ukraine</option>
                                                                                                                    <option value="AE">United Arab Emirates</option>
                                                                                                                    <option value="GB">United Kingdom</option>
                                                                                                                    <option value="US">United States</option>
                                                                                                                    <option value="UM">United States Minor Outlying Islands</option>
                                                                                                                    <option value="UY">Uruguay</option>
                                                                                                                    <option value="UZ">Uzbekistan</option>
                                                                                                                    <option value="VU">Vanuatu</option>
                                                                                                                    <option value="VE">Venezuela</option>
                                                                                                                    <option value="VN">Viet Nam</option>
                                                                                                                    <option value="VG">Virgin Islands, British</option>
                                                                                                                    <option value="VI">Virgin Islands, U.S.</option>
                                                                                                                    <option value="WF">Wallis and Futuna</option>
                                                                                                                    <option value="EH">Western Sahara</option>
                                                                                                                    <option value="YE">Yemen</option>
                                                                                                                    <option value="ZM">Zambia</option>
                                                                                                                    <option value="ZW">Zimbabwe</option>
                                                    </select>
                                                  </div>
                                            </div>
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>State <code style="font-weight: 900; font-size: 20px;">*</code></label>
                                                    <input type="text" name="state" id="state" class="form-control" value=""  required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>City <code style="font-weight: 900; font-size: 20px;">*</code></label>
                                                    <input class="form-control spinner" name="city" type="text" id="city" placeholder="City" value=""  required>
                                                </div>
                                            </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Zip Code <code style="font-weight: 900; font-size: 20px;">*</code></label>
                                                    <input class="form-control spinner" name="zip" type="text" id="zip" placeholder="Zip Code" value=""  required>
                                               </div>
                                            </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email <code style="font-weight: 900; font-size: 20px;">*</code></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                                        </div>
                                                        <input class="form-control spinner" name="email" type="email" id="email" placeholder="Email" value=""  required>
                                                    </div>
                                                 </div>
                                            </div>
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Phone No. <code style="font-weight: 900; font-size: 20px;">*</code></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                                        </div>
                                                        <input class="form-control spinner" name="phone_no" type="text" placeholder="Phone No." id="phone_no" value=""  required>
                                                        <code>Note : Enter the phone number in the following format '+Country Code-Phone Number'; e.g."+441234567890"</code>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Amount <code style="font-weight: 900; font-size: 20px;">*</code></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="fas fa-money-bill-alt"></i></span>
                                                        </div>
                                                        <input class="form-control spinner" name="amount" type="text" placeholder="Amount" id="amount" value=""  required>
                                                    </div>
                                               </div>
                                            </div>
                                                <div class="col-md-6">
                                                <div class="form-group ">
                                                <label>Currency <code style="font-weight: 900; font-size: 20px;">*</code></label>
                                                <select class="form-control select2" name="currency" id="currency" required>
                                                     <option disabled> -- Select Currency -- </option>
                                                        <option value="USD" selected>USD</option>
                                                        <option value="HKD">HKD</option>
                                                        <option value="GBP">GBP</option>
                                                        <option value="JPY">JPY</option>
                                                        <option value="EUR">EUR</option>
                                                        <option value="AUD">AUD</option>
                                                        <option value="CAD">CAD</option>
                                                        <option value="SGD">SGD</option>
                                                        <option value="NZD">NZD</option>
                                                        <option value="TWD">TWD</option>
                                                        <option value="KRW">KRW</option>
                                                        <option value="DKK">DKK</option>
                                                        <option value="TRL">TRL</option>
                                                        <option value="MYR">MYR</option>
                                                        <option value="THB">THB</option>
                                                        <option value="INR">INR</option>
                                                        <option value="PHP">PHP</option>
                                                        <option value="CHF">CHF</option>
                                                        <option value="SEK">SEK</option>
                                                        <option value="ILS">ILS</option>
                                                        <option value="ZAR">ZAR</option>
                                                        <option value="RUB">RUB</option>
                                                        <option value="NOK">NOK</option>
                                                        <option value="AED">AED</option>
                                            </select>
                                        </div>
                                     </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    <div  class="clearfix"></div>
                    <hr>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn btn-success btn-sm" id="disableBTN" form="first" value="submit">Submit</button>
                                <a href="#" class="btn btn-sm btn-danger">Cancel</a>
                            </div>
                        </div>
                    </div>
                  </div>
                </form>
                </div>
            </div>
    <br>
    <footer class="footer">
      <div>

      </div>
        <div>
            <nav class="nav">
              <ul class="pull-center">
                    <li>
                        <img src="https://ipaytotal.solutions/imgs/card-logos.jpg" alt="Master Card And Visa" title="Master Card And Visa" border="0" style="width: 80px;">
                    </li>
                    <li>
                         <a href="javascript:"><img src="https://ipaytotal.solutions/imgs/pci_logo_footer.jpg" alt="PCI-DSS - certified by SISA" title="PCI-DSS - certified by SISA" border="0"></a>
                    </li>
                    <li>
                         <a href="#" target="_blank" title="Norton Secured Powered by VeriSign"><img src="https://ipaytotal.solutions/imgs/norton_logo_footer.jpg " alt="Norton Secured Powered by VeriSign" title="Norton Secured Powered by VeriSign" border="0"></a>
                    </li>
                    <li>
                        <img src="https://ipaytotal.solutions/imgs/mastercard_logo_footer.jpg" alt="MasterCard SecureCode" title="MasterCard SecureCode" border="0">
                    </li>
                    <li>
                        <img src="https://ipaytotal.solutions/imgs/visa_logo_footer.jpg" alt="Verified by VISA" title="Verified by VISA" border="0">
                    </li>
                    <li>
                         <img src="https://ipaytotal.solutions/imgs/american_exp_footer.jpg" alt="American Express SafeKey" title="American Express SafeKey" border="0">
                    </li>
                    <li>
                        <img src="https://ipaytotal.solutions/imgs/SafeSecureLogo.jpg" alt="SafeSecure" title="SafeSecure" border="0" style="width: 70px;">
                    </li>
                    <li>
                        <img src="https://ipaytotal.solutions/imgs/ssl.png" alt="SSL" title="SSL" border="0" style="width: 70px;">
                    </li>
                    <li>
                        <img src="https://ipaytotal.solutions/imgs/sitelock.png" alt="sitelock" title="sitelock" border="0" style="width: 70px;">
                    </li>
                    <li>
                           <img src="https://ipaytotal.solutions/imgs/jcb_logo_footer.jpg" alt="JCB J/Secure" title="JCB J/Secure" border="0">
                    </li>
                    <li>
                        <img src="https://ipaytotal.solutions/imgs/comodo.png" alt="Comode" title="Comode" border="0" style="width: 80px;">
                    </li>
                </ul>
            </nav>
        </div>
    </footer>
  </div>
</body>
</html>
