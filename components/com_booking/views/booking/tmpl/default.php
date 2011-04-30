<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<style>
td{
	border-bottom:#666 dotted 1px;
  }
</style>
<div align="center">
<form action="index.php" method="post" name="adminForm" id="adminForm" style="background:#FFC">
<div class="col100">
	<fieldset class="adminform">
		<legend><?php echo JText::_( 'Personal Information' ); ?></legend>

		<table class="admintable" cellpadding="5" cellspacing="1"  style="border:dotted #666 1px;">
        
		<tr>
			<td width="100" align="right" class="key">
				<label for="greeting">
					<?php echo JText::_( 'Full Name' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="fullname" id="fullname" size="32" maxlength="250" value="" />
			</td>
		</tr>
        
        <tr>
			<td width="100" align="right" class="key">
				<label for="Hotel">
					<?php echo JText::_( 'Address' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="address" id="address" size="32" maxlength="250" value="" />
			</td>
		</tr>
        
        <tr>
			<td width="100" align="right" class="key">
				<label for="Hotel">
					<?php echo JText::_( 'Your Sex' ); ?>:
				</label>
			</td>
			<td>
				Male:&nbsp;<input type="checkbox" name="f" value="Male"  />
                Female: <input type="checkbox" name="f" value="Female"  />
			</td>
		</tr>
        
        <tr>
			<td width="100" align="right" class="key">
				<label for="Hotel">
					<?php echo JText::_( 'Your Birth Day' ); ?>:
				</label>
			</td>
			<td>
            	<select name="bday">
            	<?php 
						for($i=1;$i<32;$i++)
						echo"<option value=$i>$i</option>";
				?>
                </select>:&nbsp;
			
            		<select name="bmonth">
                    <?php 
						for($month=1;$month<13;$month++)
						{
							$m = date("F",mktime(0,0,0,$month,1,2000)); 
							echo"<option value=$month>$m</option>";
						}
					?>
                    </select>:&nbsp;
           
            		<select name="byear">
                    <?php 
						for($month=1920;$month<2001;$month++)
							echo"<option value=$month>$month</option>";
					?>
                    </select>
            </td>
		</tr>
        
        <tr>
        		<td width="100" align="right" class="key">
				<label for="country">
					<?php echo JText::_( 'Country' ); ?>:
				</label>
				</td>
        		<td>
               	 <select  name="countrylist">
                    <option value="---">
                    ---
                    </option>
                    <option value="Afghanistan">
                    Afghanistan
                    </option>
                    <option value="Albania">
                    Albania
                    </option>
                    <option value="Algeria">
                    Algeria
                    </option>
                    <option value="American Samoa">
                    American Samoa
                    </option>
                    <option value="Andorra">
                    Andorra
                    </option>
                    <option value="Angola">
                    Angola
                    </option>
                    <option value="Anguilla">
                    Anguilla
                    </option>
                    <option value="Antarctica">
                    Antarctica
                    </option>
                    <option value="Antigua and Barbuda">
                    Antigua and Barbuda
                    </option>
                    <option value="Argentina">
                    Argentina
                    </option>
                    <option value="Armenia">
                    Armenia
                    </option>
                    <option value="Arctic Ocean">
                    Arctic Ocean
                    </option>
                    <option value="Aruba">
                    Aruba
                    </option>
                    <option value="Ashmore and Cartier Islands">
                    Ashmore and Cartier Islands
                    </option>
                    <option value="Atlantic Ocean">
                    Atlantic Ocean
                    </option>
                    <option value="Australia">
                    Australia
                    </option>
                    <option value="Austria">
                    Austria
                    </option>
                    <option value="Azerbaijan">
                    Azerbaijan
                    </option>
                    <option value="Bahamas">
                    Bahamas
                    </option>
                    <option value="Bahrain">
                    Bahrain
                    </option>
                    <option value="Baker Island">
                    Baker Island
                    </option>
                    <option value="Bangladesh">
                    Bangladesh
                    </option>
                    <option value="Barbados">
                    Barbados
                    </option>
                    <option value="Bassas da India">
                    Bassas da India
                    </option>
                    <option value="Belarus">
                    Belarus
                    </option>
                    <option value="Belgium">
                    Belgium
                    </option>
                    <option value="Belize">
                    Belize
                    </option>
                    <option value="Benin">
                    Benin
                    </option>
                    <option value="Bermuda">
                    Bermuda
                    </option>
                    <option value="Bhutan">
                    Bhutan
                    </option>
                    <option value="Bolivia">
                    Bolivia
                    </option>
                    <option value="Bosnia and Herzegovina">
                    Bosnia and Herzegovina
                    </option>
                    <option value="Botswana">
                    Botswana
                    </option>
                    <option value="Bouvet Island">
                    Bouvet Island
                    </option>
                    <option value="Brazil">
                    Brazil
                    </option>
                    <option value="British Virgin Islands">
                    British Virgin Islands
                    </option>
                    <option value="Brunei">
                    Brunei
                    </option>
                    <option value="Bulgaria">
                    Bulgaria
                    </option>
                    <option value="Burkina Faso">
                    Burkina Faso
                    </option>
                    <option value="Burundi">
                    Burundi
                    </option>
                    <option value="Cambodia">
                    Cambodia
                    </option>
                    <option value="Cameroon">
                    Cameroon
                    </option>
                    <option value="Canada">
                    Canada
                    </option>
                    <option value="Cape Verde">
                    Cape Verde
                    </option>
                    <option value="Cayman Islands">
                    Cayman Islands
                    </option>
                    <option value="Central African Republic">
                    Central African Republic
                    </option>
                    <option value="Chad">
                    Chad
                    </option>
                    <option value="Chile">
                    Chile
                    </option>
                    <option value="China">
                    China
                    </option>
                    <option value="Christmas Island">
                    Christmas Island
                    </option>
                    <option value="Clipperton Island">
                    Clipperton Island
                    </option>
                    <option value="Cocos Islands">
                    Cocos Islands
                    </option>
                    <option value="Colombia">
                    Colombia
                    </option>
                    <option value="Comoros">
                    Comoros
                    </option>
                    <option value="Cook Islands">
                    Cook Islands
                    </option>
                    <option value="Coral Sea Islands">
                    Coral Sea Islands
                    </option>
                    <option value="Costa Rica">
                    Costa Rica
                    </option>
                    <option value="Cote d'Ivoire">
                    Cote d'Ivoire
                    </option>
                    <option value="Croatia">
                    Croatia
                    </option>
                    <option value="Cuba">
                    Cuba
                    </option>
                    <option value="Cyprus">
                    Cyprus
                    </option>
                    <option value="Czech Republic">
                    Czech Republic
                    </option>
                    <option value="Denmark">
                    Denmark
                    </option>
                    <option value="Democratic Republic of the Congo">
                    Democratic Republic of the Congo
                    </option>
                    <option value="Djibouti">
                    Djibouti
                    </option>
                    <option value="Dominica">
                    Dominica
                    </option>
                    <option value="Dominican Republic">
                    Dominican Republic
                    </option>
                    <option value="East Timor">
                    East Timor
                    </option>
                    <option value="Ecuador">
                    Ecuador
                    </option>
                    <option value="Egypt">
                    Egypt
                    </option>
                    <option value="El Salvador">
                    El Salvador
                    </option>
                    <option value="Equatorial Guinea">
                    Equatorial Guinea
                    </option>
                    <option value="Eritrea">
                    Eritrea
                    </option>
                    <option value="Estonia">
                    Estonia
                    </option>
                    <option value="Ethiopia">
                    Ethiopia
                    </option>
                    <option value="Europa Island">
                    Europa Island
                    </option>
                    <option value="Falkland Islands (Islas Malvinas)">
                    Falkland Islands (Islas Malvinas)
                    </option>
                    <option value="Faroe Islands">
                    Faroe Islands
                    </option>
                    <option value="Fiji">
                    Fiji
                    </option>
                    <option value="Finland">
                    Finland
                    </option>
                    <option value="France">
                    France
                    </option>
                    <option value="French Guiana">
                    French Guiana
                    </option>
                    <option value="French Polynesia">
                    French Polynesia
                    </option>
                    <option value="French Southern and Antarctic Lands">
                    French Southern and Antarctic Lands
                    </option>
                    <option value="Gabon">
                    Gabon
                    </option>
                    <option value="Gambia">
                    Gambia
                    </option>
                    <option value="Gaza Strip">
                    Gaza Strip
                    </option>
                    <option value="Georgia">
                    Georgia
                    </option>
                    <option value="Germany">
                    Germany
                    </option>
                    <option value="Ghana">
                    Ghana
                    </option>
                    <option value="Gibraltar">
                    Gibraltar
                    </option>
                    <option value="Glorioso Islands">
                    Glorioso Islands
                    </option>
                    <option value="Greece">
                    Greece
                    </option>
                    <option value="Greenland">
                    Greenland
                    </option>
                    <option value="Grenada">
                    Grenada
                    </option>
                    <option value="Guadeloupe">
                    Guadeloupe
                    </option>
                    <option value="Guam">
                    Guam
                    </option>
                    <option value="Guatemala">
                    Guatemala
                    </option>
                    <option value="Guernsey">
                    Guernsey
                    </option>
                    <option value="Guinea">
                    Guinea
                    </option>
                    <option value="Guinea-Bissau">
                    Guinea-Bissau
                    </option>
                    <option value="Guyana">
                    Guyana
                    </option>
                    <option value="Haiti">
                    Haiti
                    </option>
                    <option value="Heard Island and McDonald Islands">
                    Heard Island and McDonald Islands
                    </option>
                    <option value="Honduras">
                    Honduras
                    </option>
                    <option value="Hong Kong">
                    Hong Kong
                    </option>
                    <option value="Howland Island">
                    Howland Island
                    </option>
                    <option value="Hungary">
                    Hungary
                    </option>
                    <option value="Iceland">
                    Iceland
                    </option>
                    <option value="India">
                    India
                    </option>
                    <option value="Indian Ocean">
                    Indian Ocean
                    </option>
                    <option value="Indonesia">
                    Indonesia
                    </option>
                    <option value="Iran">
                    Iran
                    </option>
                    <option value="Iraq">
                    Iraq
                    </option>
                    <option value="Ireland">
                    Ireland
                    </option>
                    <option value="Isle of Man">
                    Isle of Man
                    </option>
                    <option value="Israel">
                    Israel
                    </option>
                    <option value="Italy">
                    Italy
                    </option>
                    <option value="Jamaica">
                    Jamaica
                    </option>
                    <option value="Jan Mayen">
                    Jan Mayen
                    </option>
                    <option value="Japan">
                    Japan
                    </option>
                    <option value="Jarvis Island">
                    Jarvis Island
                    </option>
                    <option value="Jersey">
                    Jersey
                    </option>
                    <option value="Johnston Atoll">
                    Johnston Atoll
                    </option>
                    <option value="Jordan">
                    Jordan
                    </option>
                    <option value="Juan de Nova Island">
                    Juan de Nova Island
                    </option>
                    <option value="Kazakhstan">
                    Kazakhstan
                    </option>
                    <option value="Kenya">
                    Kenya
                    </option>
                    <option value="Kingman Reef">
                    Kingman Reef
                    </option>
                    <option value="Kiribati">
                    Kiribati
                    </option>
                    <option value="Kerguelen Archipelago">
                    Kerguelen Archipelago
                    </option>
                    <option value="Kosovo">
                    Kosovo
                    </option>
                    <option value="Kuwait">
                    Kuwait
                    </option>
                    <option value="Kyrgyzstan">
                    Kyrgyzstan
                    </option>
                    <option value="Laos">
                    Laos
                    </option>
                    <option value="Latvia">
                    Latvia
                    </option>
                    <option value="Lebanon">
                    Lebanon
                    </option>
                    <option value="Lesotho">
                    Lesotho
                    </option>
                    <option value="Liberia">
                    Liberia
                    </option>
                    <option value="Libya">
                    Libya
                    </option>
                    <option value="Liechtenstein">
                    Liechtenstein
                    </option>
                    <option value="Lithuania">
                    Lithuania
                    </option>
                    <option value="Luxembourg">
                    Luxembourg
                    </option>
                    <option value="Macau">
                    Macau
                    </option>
                    <option value="Macedonia">
                    Macedonia
                    </option>
                    <option value="Madagascar">
                    Madagascar
                    </option>
                    <option value="Malawi">
                    Malawi
                    </option>
                    <option value="Malaysia">
                    Malaysia
                    </option>
                    <option value="Maldives">
                    Maldives
                    </option>
                    <option value="Mali">
                    Mali
                    </option>
                    <option value="Malta">
                    Malta
                    </option>
                    <option value="Marshall Islands">
                    Marshall Islands
                    </option>
                    <option value="Martinique">
                    Martinique
                    </option>
                    <option value="Mauritania">
                    Mauritania
                    </option>
                    <option value="Mauritius">
                    Mauritius
                    </option>
                    <option value="Mayotte">
                    Mayotte
                    </option>
                    <option value="Mexico">
                    Mexico
                    </option>
                    <option value="Micronesia">
                    Micronesia
                    </option>
                    <option value="Midway Islands">
                    Midway Islands
                    </option>
                    <option value="Moldova">
                    Moldova
                    </option>
                    <option value="Monaco">
                    Monaco
                    </option>
                    <option value="Mongolia">
                    Mongolia
                    </option>
                    <option value="Montenegro">
                    Montenegro
                    </option>
                    <option value="Montserrat">
                    Montserrat
                    </option>
                    <option value="Morocco">
                    Morocco
                    </option>
                    <option value="Mozambique">
                    Mozambique
                    </option>
                    <option value="Myanmar">
                    Myanmar
                    </option>
                    <option value="Namibia">
                    Namibia
                    </option>
                    <option value="Nauru">
                    Nauru
                    </option>
                    <option value="Navassa Island">
                    Navassa Island
                    </option>
                    <option value="Nepal">
                    Nepal
                    </option>
                    <option value="Netherlands">
                    Netherlands
                    </option>
                    <option value="Netherlands Antilles">
                    Netherlands Antilles
                    </option>
                    <option value="New Caledonia">
                    New Caledonia
                    </option>
                    <option value="New Zealand">
                    New Zealand
                    </option>
                    <option value="Nicaragua">
                    Nicaragua
                    </option>
                    <option value="Niger">
                    Niger
                    </option>
                    <option value="Nigeria">
                    Nigeria
                    </option>
                    <option value="Niue">
                    Niue
                    </option>
                    <option value="Norfolk Island">
                    Norfolk Island
                    </option>
                    <option value="North Korea">
                    North Korea
                    </option>
                    <option value="North Sea">
                    North Sea
                    </option>
                    <option value="Northern Mariana Islands">
                    Northern Mariana Islands
                    </option>
                    <option value="Norway">
                    Norway
                    </option>
                    <option value="Oman">
                    Oman
                    </option>
                    <option value="Pacific Ocean">
                    Pacific Ocean
                    </option>
                    <option value="Pakistan">
                    Pakistan
                    </option>
                    <option value="Palau">
                    Palau
                    </option>
                    <option value="Palmyra Atoll">
                    Palmyra Atoll
                    </option>
                    <option value="Panama">
                    Panama
                    </option>
                    <option value="Papua New Guinea">
                    Papua New Guinea
                    </option>
                    <option value="Paracel Islands">
                    Paracel Islands
                    </option>
                    <option value="Paraguay">
                    Paraguay
                    </option>
                    <option value="Peru">
                    Peru
                    </option>
                    <option value="Philippines">
                    Philippines
                    </option>
                    <option value="Pitcairn Islands">
                    Pitcairn Islands
                    </option>
                    <option value="Poland">
                    Poland
                    </option>
                    <option value="Portugal">
                    Portugal
                    </option>
                    <option value="Puerto Rico">
                    Puerto Rico
                    </option>
                    <option value="Qatar">
                    Qatar
                    </option>
                    <option value="Reunion">
                    Reunion
                    </option>
                    <option value="Republic of the Congo">
                    Republic of the Congo
                    </option>
                    <option value="Romania">
                    Romania
                    </option>
                    <option value="Russia">
                    Russia
                    </option>
                    <option value="Rwanda">
                    Rwanda
                    </option>
                    <option value="Saint Helena">
                    Saint Helena
                    </option>
                    <option value="Saint Kitts and Nevis">
                    Saint Kitts and Nevis
                    </option>
                    <option value="Saint Lucia">
                    Saint Lucia
                    </option>
                    <option value="Saint Pierre and Miquelon">
                    Saint Pierre and Miquelon
                    </option>
                    <option value="Saint Vincent & the Grenadines">
                    Saint Vincent & the Grenadines
                    </option>
                    <option value="Samoa">
                    Samoa
                    </option>
                    <option value="San Marino">
                    San Marino
                    </option>
                    <option value="Sao Tome and Principe">
                    Sao Tome and Principe
                    </option>
                    <option value="Saudi Arabia">
                    Saudi Arabia
                    </option>
                    <option value="Senegal">
                    Senegal
                    </option>
                    <option value="Serbia">
                    Serbia
                    </option>
                    <option value="Seychelles">
                    Seychelles
                    </option>
                    <option value="Sierra Leone">
                    Sierra Leone
                    </option>
                    <option value="Singapore">
                    Singapore
                    </option>
                    <option value="Slovakia">
                    Slovakia
                    </option>
                    <option value="Slovenia">
                    Slovenia
                    </option>
                    <option value="Solomon Islands">
                    Solomon Islands
                    </option>
                    <option value="Somalia">
                    Somalia
                    </option>
                    <option value="South Africa">
                    South Africa
                    </option>
                    <option value="South Georgia & South Sandwich Islands">
                    South Georgia & South Sandwich Islands
                    </option>
                    <option value="South Korea">
                    South Korea
                    </option>
                    <option value="Spain">
                    Spain
                    </option>
                    <option value="Spratly Islands">
                    Spratly Islands
                    </option>
                    <option value="Sri Lanka">
                    Sri Lanka
                    </option>
                    <option value="Sudan">
                    Sudan
                    </option>
                    <option value="Suriname">
                    Suriname
                    </option>
                    <option value="Svalbard">
                    Svalbard
                    </option>
                    <option value="Swaziland">
                    Swaziland
                    </option>
                    <option value="Sweden">
                    
                    Sweden
                    </option>
                    <option value="Switzerland">
                    Switzerland
                    </option>
                    <option value="Syria">
                    Syria
                    </option>
                    <option value="Taiwan">
                    Taiwan
                    </option>
                    <option value="Tajikistan">
                    Tajikistan
                    </option>
                    <option value="Tanzania">
                    Tanzania
                    </option>
                    <option value="Thailand">
                    Thailand
                    </option>
                    <option value="Togo">
                    Togo
                    </option>
                    <option value="Tokelau">
                    Tokelau
                    </option>
                    <option value="Tonga">
                    Tonga
                    </option>
                    <option value="Trinidad and Tobago">
                    Trinidad and Tobago
                    </option>
                    <option value="Tromelin Island">
                    Tromelin Island
                    </option>
                    <option value="Tunisia">
                    Tunisia
                    </option>
                    <option value="Turkey">
                    Turkey
                    </option>
                    <option value="Turkmenistan">
                    Turkmenistan
                    </option>
                    <option value="Turks and Caicos Islands">
                    Turks and Caicos Islands
                    </option>
                    <option value="Tuvalu">
                    Tuvalu
                    </option>
                    <option value="Uganda">
                    Uganda
                    </option>
                    <option value="Ukraine">
                    Ukraine
                    </option>
                    <option value="United Arab Emirates">
                    United Arab Emirates
                    </option>
                    <option value="United Kingdom">
                    United Kingdom
                    </option>
                    <option value="USA">
                    USA
                    </option>
                    <option value="Uruguay">
                    Uruguay
                    </option>
                    <option value="Uzbekistan">
                    Uzbekistan
                    </option>
                    <option value="Vanuatu">
                    Vanuatu
                    </option>
                    <option value="Venezuela">
                    Venezuela
                    </option>
                    <option value="Viet Nam">
                    Viet Nam
                    </option>
                    <option value="Virgin Islands">
                    Virgin Islands
                    </option>
                    <option value="Wake Island">
                    Wake Island
                    </option>
                    <option value="Wallis and Futuna">
                    Wallis and Futuna
                    </option>
                    <option value="West Bank">
                    West Bank
                    </option>
                    <option value="Western Sahara">
                    Western Sahara
                    </option>
                    <option value="Yemen">
                    Yemen
                    </option>
                    <option value="Yugoslavia">
                    Yugoslavia
                    </option>
                    <option value="Zambia">
                    Zambia
                    </option>
                    <option value="Zimbabwe">
                    Zimbabwe
                    </option>
</select>
				</td>

        </tr>
        
        <tr>
			<td width="100" align="right" class="key">
				<label for="mail">
					<?php echo JText::_( 'Your mail' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="mail" id="mail" size="32" maxlength="250" value="" />
			</td>
		</tr>
        
	</table>
	</fieldset>
    
    <fieldset class="adminform">
		<legend><?php echo JText::_( 'Tours Information' ); ?></legend>

		<table class="admintable" cellpadding="5" cellspacing="1" style="border:dotted #666 1px;">
        
		
        
        <tr>
			<td width="100" align="right" class="key">
				<label for="combineroom">
					<?php echo JText::_( 'Combine Room' ); ?>:
				</label>
			</td>
			<td>
				<select name="combineroom">
                	<option value="None">None</option>
                    <option value="Deluxe">Deluxe</option>
                    <option value="Suite">Suite</option>
                    <option value="Superior">Superior</option>
                </select>
			</td>
            
		</tr>
          
        <tr>
			<td width="100" align="right" class="key">
				<label for="combineroom">
					<?php echo JText::_( 'Room Preference' ); ?>:
				</label>
			</td>
			<td>
				Single<select name="roomsingle">
                	  <option value="None">None</option>
            	<?php 
						for($i=1;$i<20;$i++)
						echo"<option value=$i>$i</option>";
				?>
                </select>
                Single<select name="roomdouble">
                <option value="None">None</option>
            	<?php 
						for($i=1;$i<20;$i++)
						echo"<option value=$i>$i</option>";
				?>
                </select>
                Twin<select name="roomtwin">
                <option value="None">None</option>
            	<?php 
						for($i=1;$i<20;$i++)
						echo"<option value=$i>$i</option>";
				?>
                </select>
			</td>
		</tr>
        
        <tr>
			<td width="100" align="right" class="key">
				<label for="Hotel">
					<?php echo JText::_( 'Departure Date' ); ?>:
				</label>
			</td>
			<td>
            	<select name="dday">
            	<?php 
						for($i=1;$i<32;$i++)
						echo"<option value=$i>$i</option>";
				?>
                </select>:&nbsp;
			
            		<select name="dmonth">
                    <?php 
						for($month=1;$month<13;$month++)
						{
							$m = date("F",mktime(0,0,0,$month,1,2000)); 
							echo"<option value=$month>$m</option>";
						}
					?>
                    </select>:&nbsp;
            
            		<select name="dyear">
                    <?php 
						for($month=1920;$month<2001;$month++)
							echo"<option value=$month>$month</option>";
					?>
                    </select>
            </td>
		</tr>
        
        <tr>
			<td width="100" align="right" class="key">
				<label for="combineroom">
					<?php echo JText::_( 'Number Of Person' ); ?>:
				</label>
			</td>
            
			<td>
				Adult<select name="adult">
            	<?php 
						for($i=1;$i<20;$i++)
						echo"<option value=$i>$i</option>";
				?>
                </select>
                
                Children <select name="children">
                    <option value="None">None</option>
                    <?php 
                            for($i=1;$i<13;$i++)
                            echo"<option value=$i>$i</option>";
                    ?>
                </select>
               
			</td>
            
		</tr>
        
        <tr>
			<td width="100" align="right" class="key">
            
				<label for="greeting">
					<?php echo JText::_( 'Your Detailed Requests' ); ?>:
				</label>
			</td>
            
			<td>
				<textarea name="detailreques" id="detailreques" cols="50" rows="10" value="" /> </textarea>
			</td>
		</tr>
        
	</table>
	</fieldset>
    
     <fieldset class="adminform">
		<legend><?php echo JText::_( 'Booking' ); ?></legend>

		<table class="admintable" cellpadding="5" cellspacing="2" border="1">

        <tr>
			
           <input type="button" value="Booking" name="booking" />
            
		</tr>

	</table>
	</fieldset>
    
</div>
<div class="clr"></div>

<input type="hidden" name="option" value="com_hello" />
<input type="hidden" name="id" value="<?php echo $this->hello->id; ?>" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="controller" value="hello" />
</form>
</div>