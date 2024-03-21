<div id="create-overlay" class="overlay" onclick="closeCreateOverlay()">
    <div class="overlay-content" onclick="event.stopPropagation();">
        <span class="close-btn" onclick="closeCreateOverlay()">X</span>
        <form action="{{ route('create') }}" method="post" class="addCustomerForm">
            @csrf
            <div class="form-container">
                <div class="form-group">
                    <label for="firstName">Voornaam:</label><br>
                    <input type="text" id="firstName" name="firstName"><br>
                </div>

                <div class="form-group">
                    <label for="emailAddress">Email:</label><br>
                    <input type="email" id="emailAddress" name="emailAddress"><br>                    
                </div>

                <div class="form-group">
                    <label for="StreetAddress">Straatnaam:</label><br>
                    <input type="text" id="StreetAddress" name="StreetAddress"><br>                    
                </div>

                <div class="form-group">
                    <label for="City">Gemeente:</label><br>
                    <input type="text" id="City" name="City"><br>                    
                </div>

                <div class="form-group">
                    <label for="phoneNumber">Telefoonnummer:</label><br>
                    <div class="phone-input-container">
                        <select id="countryCode" name="countryCode">
                            <option value="+31">+31  - Netherlands</option>
                            <option value="+32">+32  - België</option>
                            <option value="+44">+44  - UK</option>
                            <option value="+49">+49  - Germany</option>
                            <option value="+91">+91  - India</option>

                        </select>
                        <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Telefoonnummer">
                    </div>
                </div>                
            </div>
            <div class="form-container">
                <div class="form-group">
                    <label for="lastName">Achternaam:</label><br>
                    <input type="text" id="lastName" name="lastName"><br>
                </div>

                <div class="form-group">
                    <label for="birthDate">Geboorte Datum:</label><br>
                    <input type="date" id="birthDate" name="birthDate"><br>
                </div>       

                <div class="form-group">
                    <label for="houseNumber">Huis Nummer:</label><br>
                    <input type="text" id="houseNumber" name="houseNumber"><br>
                </div>

                <div class="form-group">
                    <label for="Country">Land:</label><br>
                    <input type="text" id="Country" name="Country"><br><br>                    
                </div>    
                
                <div class="form-group">
                    <input type="submit" id="saveButton" value="Submit">
                </div>
            </div>
        </form>
    </div>
</div>
<div id="create-overlay" class="overlay" onclick="closeCreateOverlay()">
    <div class="overlay-content" onclick="event.stopPropagation();">
        <span class="close-btn" onclick="closeCreateOverlay()">X</span>
        <form action="{{ route('create') }}" method="post" class="addCustomerForm">
            @csrf
            <div class="form-container">
                <div class="form-group">
                    <label for="firstName">Voornaam:</label><br>
                    <input type="text" id="firstName" name="firstName"><br>
                </div>

                <div class="form-group">
                    <label for="emailAddress">Email:</label><br>
                    <input type="email" id="emailAddress" name="emailAddress"><br>                    
                </div>

                <div class="form-group">
                    <label for="StreetAddress">Straatnaam:</label><br>
                    <input type="text" id="StreetAddress" name="StreetAddress"><br>                    
                </div>

                <div class="form-group">
                    <label for="City">Gemeente:</label><br>
                    <input type="text" id="City" name="City"><br>                    
                </div>

                <div class="form-group">
                    <label for="phoneNumber">Telefoonnummer:</label><br>
                    <div class="phone-input-container">
                        <select id="countryCode" name="countryCode" value="">
                            <option value="+31">+31  - Netherlands</option>
                            <option value="+32">+32  - België</option>
                            <option value="+44">+44  - UK</option>
                            <option value="+49">+49  - Germany</option>
                            <option value="+91">+91  - India</option>

                        </select>
                        <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Telefoonnummer">
                    </div>
                </div>                
            </div>
            <div class="form-container">
                <div class="form-group">
                    <label for="lastName">Achternaam:</label><br>
                    <input type="text" id="lastName" name="lastName"><br>
                </div>

                <div class="form-group">
                    <label for="birthDate">Geboorte Datum:</label><br>
                    <input type="date" id="birthDate" name="birthDate"><br>
                </div>       

                <div class="form-group">
                    <label for="houseNumber">Huis Nummer:</label><br>
                    <input type="text" id="houseNumber" name="houseNumber"><br>
                </div>

                <div class="form-group">
                    <label for="Country">Land:</label><br>
                    <input type="text" id="Country" name="Country"><br><br>                    
                </div>    
                
                <div class="form-group">
                    <input type="submit" id="saveButton" value="Submit">
                </div>
            </div>
        </form>
    </div>
</div>

<div id="edit-overlay" class="overlay" onclick="closeEditOverlay()">
    <div class="overlay-content" onclick="event.stopPropagation();">
        <span class="close-btn" onclick="closeEditOverlay()">X</span>
        <form action="{{ route('update') }}" method="post" class="addCustomerForm">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" id="E-id">
            <div class="form-container">
                <div class="form-group">
                    <label for="firstName">Voornaam:</label><br>
                    <input type="text" id="E-firstName" name="firstname"><br>
                </div>

                <div class="form-group">
                    <label for="emailAddress">Email:</label><br>
                    <input type="email" id="E-emailAddress" name="emailAdress"><br>                    
                </div>

                <div class="form-group">
                    <label for="StreetAddress">Straatnaam:</label><br>
                    <input type="text" id="E-streetAddress" name="StreetAddress"><br>                    
                </div>

                <div class="form-group">
                    <label for="City">Gemeente:</label><br>
                    <input type="text" id="E-City" name="city"><br>                    
                </div>

                <div class="form-group">
                    <label for="phoneNumber">Telefoonnummer:</label><br>
                    <div class="phone-input-container">
                        <select id="E-countryCode" name="countryCode" value="">
                            <option value="+31">+31  - Netherlands</option>
                            <option value="+32">+32  - België</option>
                            <option value="+44">+44  - UK</option>
                            <option value="+49">+49  - Germany</option>
                            <option value="+91">+91  - India</option>

                        </select>
                        <input type="tel" id="E-phoneNumber" name="phoneNumber" placeholder="Telefoonnummer">
                    </div>
                </div>                
            </div>
            <div class="form-container">
                <div class="form-group">
                    <label for="lastName">Achternaam:</label><br>
                    <input type="text" id="E-lastName" name="lastname"><br>
                </div>

                <div class="form-group">
                    <label for="birthDate">Geboorte Datum:</label><br>
                    <input type="date" id="E-birthDate" name="birthDate"><br>
                </div>       

                <div class="form-group">
                    <label for="houseNumber">Huis Nummer:</label><br>
                    <input type="text" id="E-houseNumber" name="houseNumber"><br>
                </div>

                <div class="form-group">
                    <label for="Country">Land:</label><br>
                    <input type="text" id="E-Country" name="country"><br><br>                    
                </div>    
                
                <div class="form-group">
                    <input type="submit" id="saveButton" value="Submit">
                </div>
            </div>
        </form>
    </div>
</div>

<script src="{{ asset('js/popup.js') }}"></script>