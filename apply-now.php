<?php include('layout/header.php');?>
<style>
    /*custom font*/
    @import url(https://fonts.googleapis.com/css?family=Montserrat);

    /*basic reset*/
    * {
        margin: 0;
        padding: 0;
    }

    .fc-background {
        height: 100%;
        /*Image only BG fallback*/

        /*background = gradient + image pattern combo*/
        background:
            linear-gradient(rgb(15 37 119), rgba(155, 89, 182, 0.6))
    }

    body {
        font-family: montserrat, arial, verdana;
    }

    /*form styles*/
    #msform {
       width: 100%;
    margin: 50px auto;
    text-align: center;
    position: relative;
    margin-top: -50px;
    }

    .f-color {
        color: #fff;
    }

    #msform fieldset {
    color: #fff;
    padding: 20px 30px;
    width: 100%;
    position: relative;
    }

    /*Hide all except first fieldset*/
    #msform fieldset:not(:first-of-type) {
        display: none;
    }

    /*inputs*/
    #msform input,
    #msform textarea {
        padding: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-bottom: 10px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #17191b;
        font-size: 15px;
    }

    /*buttons*/
    #msform .action-button {
        width: 100px;
        background: #27AE60;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 1px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px;
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
    }

    /*headings*/
    .float-left {
        float: left;
    }

    .fs-title {
        font-size: 15px;
        text-transform: uppercase;
        color: #fff;
        margin-bottom: 10px;
    }

    .fs-subtitle {
        font-weight: normal;
        font-size: 13px;
        color: #fff;
        margin-bottom: 20px;
    }

    /*progressbar*/
    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        /*CSS counters to number the steps*/
        counter-reset: step;
    }

    #progressbar li {
        list-style-type: none;
        color: white;
        text-transform: uppercase;
        font-size: 9px;
        width: 33.33%;
        float: left;
        position: relative;
    }

    #progressbar li:before {
        content: counter(step);
        counter-increment: step;
        width: 20px;
        line-height: 20px;
        display: block;
        font-size: 10px;
        color: #333;
        background: white;
        border-radius: 3px;
        margin: 0 auto 5px auto;
    }

    /*progressbar connectors*/
    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: white;
        position: absolute;
        left: -50%;
        top: 9px;
        z-index: -1;
        /*put it behind the numbers*/
    }

    #progressbar li:first-child:after {
        /*connector not needed before the first step*/
        content: none;
    }

    /*marking active/completed steps green*/
    /*The number of the step and the connector before it = green*/
    #progressbar li.active:before,
    #progressbar li.active:after {
        background: #27AE60;
        color: white;
    }
</style>
<section class="services-details-area ptb-100 fc-background">
    <!-- multistep form -->
    <!-- <form id="msform" class="apply-form"> -->
    <form action="sendemail.php" method="post" id="msform">

        <!-- fieldsets -->
        <fieldset>
            <h2 class="fs-title">Looking for a Loan?</h2>
            <h3 class="fs-subtitle">Let us help you find the most suitable offers.</h3>
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <label class="float-left">Mobile Number</label>
                    <input type="number" name="number" class="mobile"
                        placeholder="Will check offer against your number" />
                </div>
                <div class="col-lg-4"></div>
            </div>
            <input type="button" name="next" class="next action-button" value="Proceed" />
        </fieldset>
        <fieldset>
            <h2 class="fs-title">Compare and Apply for Personal Loans</h2>
            <h3 class="fs-subtitle">Let us help you find the most suitable offers.</h3>
            <div class="row">
                <div class="col-lg-4">
                    <label class="float-left">Your desired loan amount</label>
                    <input type="number" name="ammount" placeholder="Your desired loan amount" />
                </div>
                <div class="col-lg-4">
                    <label class="float-left">Your Company Name</label>
                    <input type="text" name="Company" placeholder="Your Company Name" />
                </div>
                <div class="col-lg-4">
                    <label class="float-left">Your net monthly income</label>
                    <input type="number" name="monthly_income" placeholder="Your net monthly income" />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="select-box">
                        <label class="float-left">Your Employment Type</label>
                        <select name="employment_type_id" class="form-control">
                            <option value="">Please select</option>
                            <option value="Salaried">Salaried</option>
                            <option value="Self Employed - Business Owner">Self Employed - Business Owner</option>
                            <option value="Self Employed - Professional">Self Employed - Professional</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <label class="float-left">Your current city of residence</label>
                    <select class="form-control" name="residence">
                        <option value="">Please select</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Gurgaon">Gurgaon</option>
                        <option value="Noida">Noida</option>
                        <option value="Mumbai">Mumbai</option>
                        <option value="Bangalore">Bangalore</option>
                        <option value="Pune">Pune</option>
                        <option value="Chennai">Chennai</option>
                        <option value="Hyderabad">Hyderabad</option>
                        <option value="Surat">Surat</option>
                        <option value="Ahmedabad">Ahmedabad</option>
                        <option value="Abdasa">Abdasa</option>
                        <option value="Abohar">Abohar</option>
                        <option value="Abu Road">Abu Road</option>
                        <option value="Achalpur Paratwada">Achalpur Paratwada</option>
                        <option value="Adampur">Adampur</option>
                        <option value="Addanki">Addanki</option>
                        <option value="Adilabad">Adilabad</option>
                        <option value="Adipur">Adipur</option>
                        <option value="Adoni">Adoni</option>
                        <option value="Agartala">Agartala</option>
                        <option value="Agra">Agra</option>
                        <option value="Ahmedabad">Ahmedabad</option>
                        <option value="Ahmedb">Ahmedb</option>
                        <option value="Ahmedgarh">Ahmedgarh</option>
                        <option value="Ahmednagar">Ahmednagar</option>
                        <option value="Aizawl">Aizawl</option>
                        <option value="Ajmer">Ajmer</option>
                        <option value="Akluj">Akluj</option>
                        <option value="Akola">Akola</option>
                        <option value="Akot">Akot</option>
                        <option value="Alappuzha">Alappuzha</option>
                        <option value="Alibag">Alibag</option>
                        <option value="Aligarh">Aligarh</option>
                        <option value="Alipurdr">Alipurdr</option>
                        <option value="Allahabad">Allahabad</option>
                        <option value="Alleppey">Alleppey</option>
                        <option value="Almora">Almora</option>
                        <option value="Along">Along</option>
                        <option value="Aluva">Aluva</option>
                        <option value="Alwar">Alwar</option>
                        <option value="Amalapuram">Amalapuram</option>
                        <option value="Amalner">Amalner</option>
                        <option value="Amalsad">Amalsad</option>
                        <option value="Amareli">Amareli</option>
                        <option value="Ambaji">Ambaji</option>
                        <option value="Ambala">Ambala</option>
                        <option value="Ambassa">Ambassa</option>
                        <option value="Ambedkar Nagar">Ambedkar Nagar</option>
                        <option value="Ambhajogai">Ambhajogai</option>
                        <option value="Ambikapur">Ambikapur</option>
                        <option value="Ambur">Ambur</option>
                        <option value="Amravati">Amravati</option>
                        <option value="Amreli">Amreli</option>
                        <option value="Amritsar">Amritsar</option>
                        <option value="Anakapalli">Anakapalli</option>
                        <option value="Anand">Anand</option>
                        <option value="Anantapur">Anantapur</option>
                        <option value="Anantnag">Anantnag</option>
                        <option value="Andman & Nicobar">Andman &amp; Nicobar</option>
                        <option value="Angamalli">Angamalli</option>
                        <option value="Angul">Angul</option>
                        <option value="Anjar">Anjar</option>
                        <option value="Anjaw">Anjaw</option>
                        <option value="Ankleshwar">Ankleshwar</option>
                        <option value="Anupgarh">Anupgarh</option>
                        <option value="Anuppur">Anuppur</option>
                        <option value="Arambagh">Arambagh</option>
                        <option value="Arani">Arani</option>
                        <option value="Araria">Araria</option>
                        <option value="Ariyalur">Ariyalur</option>
                        <option value="Arrah">Arrah</option>
                        <option value="Asansol">Asansol</option>
                        <option value="Ashoknagar">Ashoknagar</option>
                        <option value="Ashta">Ashta</option>
                        <option value="Attur">Attur</option>
                        <option value="Auraiya">Auraiya</option>
                        <option value="Aurangabad">Aurangabad</option>
                        <option value="Aurangabad (bihar)">Aurangabad (bihar)</option>
                        <option value="Azamgarh">Azamgarh</option>
                        <option value="B C Road">B C Road</option>
                        <option value="Badaun">Badaun</option>
                        <option value="Baddi">Baddi</option>
                        <option value="Badlapur">Badlapur</option>
                        <option value="Bagalkote">Bagalkote</option>
                        <option value="Bageshwar">Bageshwar</option>
                        <option value="Bagpat">Bagpat</option>
                        <option value="Bahadurgarh">Bahadurgarh</option>
                        <option value="Bahraich">Bahraich</option>
                        <option value="Baikunthpur">Baikunthpur</option>
                        <option value="Bajwa">Bajwa</option>
                        <option value="Baksa">Baksa</option>
                        <option value="Balachaur">Balachaur</option>
                        <option value="Balaghat">Balaghat</option>
                        <option value="Balasinor">Balasinor</option>
                        <option value="Balasore">Balasore</option>
                        <option value="Baleswar">Baleswar</option>
                        <option value="Ballia">Ballia</option>
                        <option value="Balrampur">Balrampur</option>
                        <option value="Balugaon">Balugaon</option>
                        <option value="Balurghat">Balurghat</option>
                        <option value="Banaskantha">Banaskantha</option>
                        <option value="Banaskhantha">Banaskhantha</option>
                        <option value="Banda">Banda</option>
                        <option value="Bandipore">Bandipore</option>
                        <option value="Banga">Banga</option>
                        <option value="Banka">Banka</option>
                        <option value="Bankura">Bankura</option>
                        <option value="Banswara">Banswara</option>
                        <option value="Barabanki">Barabanki</option>
                        <option value="Baramati">Baramati</option>
                        <option value="Baramulla">Baramulla</option>
                        <option value="Baran">Baran</option>
                        <option value="Barara">Barara</option>
                        <option value="Bardhaman">Bardhaman</option>
                        <option value="Bardoli">Bardoli</option>
                        <option value="Bareilly">Bareilly</option>
                        <option value="Bargarh">Bargarh</option>
                        <option value="Baripada">Baripada</option>
                        <option value="Barmer">Barmer</option>
                        <option value="Barnala">Barnala</option>
                        <option value="Barpeta">Barpeta</option>
                        <option value="Barshi">Barshi</option>
                        <option value="Barwani">Barwani</option>
                        <option value="Basmat">Basmat</option>
                        <option value="Bastar">Bastar</option>
                        <option value="Basti">Basti</option>
                        <option value="Bathinda">Bathinda</option>
                        <option value="Bavala">Bavala</option>
                        <option value="Beawar">Beawar</option>
                        <option value="Beed">Beed</option>
                        <option value="Begowal">Begowal</option>
                        <option value="Begusarai">Begusarai</option>
                        <option value="Behrampur">Behrampur</option>
                        <option value="Belgaum">Belgaum</option>
                        <option value="Bellary">Bellary</option>
                        <option value="Bengaluru">Bengaluru</option>
                        <option value="Betroj">Betroj</option>
                        <option value="Bettiah">Bettiah</option>
                        <option value="Betul">Betul</option>
                        <option value="Bhabua">Bhabua</option>
                        <option value="Bhachau">Bhachau</option>
                        <option value="Bhadrak">Bhadrak</option>
                        <option value="Bhagalpur">Bhagalpur</option>
                        <option value="Bhandara">Bhandara</option>
                        <option value="Bharatpur">Bharatpur</option>
                        <option value="Bharuch">Bharuch</option>
                        <option value="Bhatapara">Bhatapara</option>
                        <option value="Bhavnagar">Bhavnagar</option>
                        <option value="Bhawanigarh">Bhawanigarh</option>
                        <option value="Bhawanipatna">Bhawanipatna</option>
                        <option value="Bhilad">Bhilad</option>
                        <option value="Bhilai">Bhilai</option>
                        <option value="Bhilwara">Bhilwara</option>
                        <option value="Bhind">Bhind</option>
                        <option value="Bhiwadi">Bhiwadi</option>
                        <option value="Bhiwani">Bhiwani</option>
                        <option value="Bhogpur">Bhogpur</option>
                        <option value="Bhojpur">Bhojpur</option>
                        <option value="Bhopal">Bhopal</option>
                        <option value="Bhubaneswar">Bhubaneswar</option>
                        <option value="Bhuj">Bhuj</option>
                        <option value="Bhupalpally">Bhupalpally</option>
                        <option value="Biaora">Biaora</option>
                        <option value="Bidar">Bidar</option>
                        <option value="Bihar Sharif">Bihar Sharif</option>
                        <option value="Bijapur">Bijapur</option>
                        <option value="Bijapur">Bijapur</option>
                        <option value="Bijnor">Bijnor</option>
                        <option value="Bikaner">Bikaner</option>
                        <option value="Bilaspur">Bilaspur</option>
                        <option value="Bilaspur">Bilaspur</option>
                        <option value="Bilimora">Bilimora</option>
                        <option value="Bina Etawa">Bina Etawa</option>
                        <option value="Birbhum">Birbhum</option>
                        <option value="Bishnupur">Bishnupur</option>
                        <option value="Bokaro">Bokaro</option>
                        <option value="Bolangir">Bolangir</option>
                        <option value="Bomdila">Bomdila</option>
                        <option value="Bongaigaon">Bongaigaon</option>
                        <option value="Borsad">Borsad</option>
                        <option value="Boudh">Boudh</option>
                        <option value="Bramhapuri Wadsa">Bramhapuri Wadsa</option>
                        <option value="Budgam">Budgam</option>
                        <option value="Budhlada">Budhlada</option>
                        <option value="Bulandshahr">Bulandshahr</option>
                        <option value="Buldhana">Buldhana</option>
                        <option value="Bundi">Bundi</option>
                        <option value="Burdwan">Burdwan</option>
                        <option value="Burhanpur">Burhanpur</option>
                        <option value="Butibori">Butibori</option>
                        <option value="Buxar">Buxar</option>
                        <option value="Cachar">Cachar</option>
                        <option value="Chaibasa">Chaibasa</option>
                        <option value="Chakradharpur">Chakradharpur</option>
                        <option value="Chalisgaon">Chalisgaon</option>
                        <option value="Chamarajanagar">Chamarajanagar</option>
                        <option value="Chamba">Chamba</option>
                        <option value="Chamoli">Chamoli</option>
                        <option value="Champa">Champa</option>
                        <option value="Champawat">Champawat</option>
                        <option value="Champhai">Champhai</option>
                        <option value="Chand Kheda">Chand Kheda</option>
                        <option value="Chandauli">Chandauli</option>
                        <option value="Chandel">Chandel</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chandrapur">Chandrapur</option>
                        <option value="Changlang">Changlang</option>
                        <option value="Chapra">Chapra</option>
                        <option value="Chatra">Chatra</option>
                        <option value="Cheeka">Cheeka</option>
                        <option value="Cheeka">Cheeka</option>
                        <option value="Chennai">Chennai</option>
                        <option value="Cherpulassery">Cherpulassery</option>
                        <option value="Chhatarpur">Chhatarpur</option>
                        <option value="Chhindwara">Chhindwara</option>
                        <option value="Chidambaram">Chidambaram</option>
                        <option value="Chikhli">Chikhli (guj.)</option>
                        <option value="Chikkaballapur">Chikkaballapur</option>
                        <option value="Chikkamagaluru">Chikkamagaluru</option>
                        <option value="Chilakaluripet">Chilakaluripet</option>
                        <option value="Chinnamiram">Chinnamiram</option>
                        <option value="Chiplun">Chiplun</option>
                        <option value="Chirala">Chirala</option>
                        <option value="Chirang">Chirang</option>
                        <option value="Chitradurga">Chitradurga</option>
                        <option value="Chitrakoot">Chitrakoot</option>
                        <option value="Chittaranjan">Chittaranjan</option>
                        <option value="Chittoor">Chittoor</option>
                        <option value="Chittorgarh">Chittorgarh</option>
                        <option value="Chomu">Chomu</option>
                        <option value="Chopda">Chopda</option>
                        <option value="Chotila">Chotila</option>
                        <option value="Churachandpur">Churachandpur</option>
                        <option value="Churu">Churu</option>
                        <option value="Coimbatore">Coimbatore</option>
                        <option value="Cooch Behar">Cooch Behar</option>
                        <option value="Cuddalore">Cuddalore</option>
                        <option value="Cumbum">Cumbum</option>
                        <option value="Cuttack">Cuttack</option>
                        <option value="Daang">Daang</option>
                        <option value="Dabhoi">Dabhoi</option>
                        <option value="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option>
                        <option value="Dahanu Mh">Dahanu Mh</option>
                        <option value="Dahegam">Dahegam</option>
                        <option value="Dahej">Dahej</option>
                        <option value="Dahod">Dahod</option>
                        <option value="Dakshin Dinajpur">Dakshin Dinajpur</option>
                        <option value="Dakshina Kannada">Dakshina Kannada</option>
                        <option value="Daman">Daman</option>
                        <option value="Daman & Diu">Daman &amp; Diu</option>
                        <option value="Damanjodi">Damanjodi</option>
                        <option value="Damoh">Damoh</option>
                        <option value="Dantewada">Dantewada</option>
                        <option value="Daporijo">Daporijo</option>
                        <option value="Darbhanga">Darbhanga</option>
                        <option value="Darjeeling">Darjeeling</option>
                        <option value="Darrang">Darrang</option>
                        <option value="Datia">Datia</option>
                        <option value="Dausa">Dausa</option>
                        <option value="Davanagere">Davanagere</option>
                        <option value="Deesa">Deesa</option>
                        <option value="Dehradun">Dehradun</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Deogarh">Deogarh</option>

                        <option value="Deoghar">Deoghar</option>
                        <option value="Deoria">Deoria</option>
                        <option value="Dewas">Dewas</option>
                        <option value="Dhalai">Dhalai</option>
                        <option value="Dhamnod">Dhamnod</option>
                        <option value="Dhamtari">Dhamtari</option>
                        <option value="Dhanbad">Dhanbad</option>
                        <option value="Dhandhuka">Dhandhuka</option>
                        <option value="Dhangardha">Dhangardha</option>
                        <option value="Dhar">Dhar</option>
                        <option value="Dharampur">Dharampur</option>
                        <option value="Dharapuram">Dharapuram</option>
                        <option value="Dharmapuri">Dharmapuri</option>
                        <option value="Dharmavaram">Dharmavaram</option>
                        <option value="Dharwad">Dharwad</option>
                        <option value="Dhemaji">Dhemaji</option>
                        <option value="Dhenkanal">Dhenkanal</option>
                        <option value="Dholpur">Dholpur</option>
                        <option value="Dhoraji">Dhoraji</option>
                        <option value="Dhubri">Dhubri</option>
                        <option value="Dhule">Dhule</option>
                        <option value="Dibang">Dibang Valley</option>
                        <option value="Dibrugarh">Dibrugarh</option>
                        <option value="Dimapur">Dimapur</option>
                        <option value="Dindigul">Dindigul</option>
                        <option value="Dindori">Dindori</option>
                        <option value="Dinhata">Dinhata</option>
                        <option value="Dispur">Dispur</option>
                        <option value="Diu">Diu</option>
                        <option value="Doda">Doda</option>
                        <option value="Dumka">Dumka</option>
                        <option value="Dungarpur">Dungarpur</option>
                        <option value="Durg">Durg</option>
                        <option value="Durgapur">Durgapur</option>
                        <option value="Dwarka">Dwarka</option>
                        <option value="East Garo Hills">East Garo Hills</option>
                        <option value="East Godavari">East Godavari</option>
                        <option value="East Kameng">East Kameng</option>
                        <option value="East Khasi Hills">East Khasi Hills</option>
                        <option value="East Siang">East Siang</option>
                        <option value="East Singhbhum">East Singhbhum</option>
                        <option value="Ellenabad">Ellenabad</option>
                        <option value="Ernakulam">Ernakulam</option>
                        <option value="Erode">Erode</option>
                        <option value="Etah">Etah</option>
                        <option value="Etawah">Etawah</option>
                        <option value="Faizabad">Faizabad</option>
                        <option value="Falakata">Falakata</option>
                        <option value="Faridabad">Faridabad</option>
                        <option value="Faridkot">Faridkot</option>
                        <option value="Farrukhabad">Farrukhabad</option>
                        <option value="Fatehabad">Fatehabad</option>
                        <option value="Fatehgarh Sahib">Fatehgarh Sahib</option>
                        <option value="Fatehpur">Fatehpur</option>
                        <option value="Fazilka">Fazilka</option>
                        <option value="Firozabad">Firozabad</option>
                        <option value="Firozpur">Firozpur</option>
                        <option value="Gadag">Gadag</option>
                        <option value="Gadchiroli">Gadchiroli</option>
                        <option value="Gadwal">Gadwal</option>
                        <option value="Gajapati">Gajapati</option>
                        <option value="Ganderbal">Ganderbal</option>
                        <option value="Gandevi">Gandevi</option>
                        <option value="Gandhi Nagar">Gandhi Nagar</option>
                        <option value="Gandhidham">Gandhidham</option>
                        <option value="Gandhinagar">Gandhinagar</option>
                        <option value="Ganganagar">Ganganagar</option>
                        <option value="Gangavathi">Gangavathi</option>
                        <option value="Gangtok">Gangtok</option>
                        <option value="Ganjam">Ganjam</option>
                        <option value="Garhwa">Garhwa</option>
                        <option value="Gautam Buddha Nagar">Gautam Buddha Nagar</option>
                        <option value="Gaya">Gaya</option>
                        <option value="Geyzing">Geyzing</option>
                        <option value="Ghaziabad">Ghaziabad</option>
                        <option value="Ghazipur">Ghazipur</option>
                        <option value="Giddalur">Giddalur</option>
                        <option value="Gidderbaha">Gidderbaha</option>
                        <option value="Giridih">Giridih</option>
                        <option value="Goa">Goa</option>
                        <option value="Goalpara">Goalpara</option>
                        <option value="Godda">Godda</option>
                        <option value="Godhra">Godhra</option>
                        <option value="Gohana">Gohana</option>
                        <option value="Gokak">Gokak</option>
                        <option value="Golaghat">Golaghat</option>
                        <option value="Gonda">Gonda</option>
                        <option value="Gondal">Gondal</option>
                        <option value="Gondia">Gondia</option>
                        <option value="Gopal Ganj">Gopal Ganj</option>
                        <option value="Gorakhpur">Gorakhpur</option>
                        <option value="Gorkakhpur">Gorkakhpur</option>
                        <option value="Gudivada">Gudivada</option>
                        <option value="Gudur">Gudur</option>
                        <option value="Gulbarga">Gulbarga</option>
                        <option value="Gumla">Gumla</option>
                        <option value="Guna">Guna</option>
                        <option value="Guntakal">Guntakal</option>
                        <option value="Guntur">Guntur</option>
                        <option value="Gurdaspur">Gurdaspur</option>
                        <option value="Gurgaon">Gurgaon</option>
                        <option value="Guru Har Sahai">Guru Har Sahai</option>
                        <option value="Guwahati">Guwahati</option>
                        <option value="Gwalior">Gwalior</option>
                        <option value="Hailakandi">Hailakandi</option>
                        <option value="Hajipur">Hajipur</option>
                        <option value="Haldia">Haldia</option>
                        <option value="Haldia (bihar)">Haldia (bihar)</option>
                        <option value="Haldwani">Haldwani</option>
                        <option value="Halol">Halol</option>
                        <option value="Hamirpur">Hamirpur</option>
                        <option value="Hamirpur">Hamirpur</option>
                        <option value="Hanumangarh">Hanumangarh</option>
                        <option value="Hapur">Hapur</option>
                        <option value="Harda">Harda</option>
                        <option value="Hardoi">Hardoi</option>
                        <option value="Haridwar">Haridwar</option>
                        <option value="Harpanahalli">Harpanahalli</option>
                        <option value="Hassan">Hassan</option>
                        <option value="Haveri">Haveri</option>
                        <option value="Hazaribagh">Hazaribagh</option>
                        <option value="Himat Nagar">Himat Nagar</option>
                        <option value="Himatnagar">Himatnagar</option>
                        <option value="Hindupur">Hindupur</option>
                        <option value="Hinghanghat">Hinghanghat</option>
                        <option value="Hingoli">Hingoli</option>
                        <option value="Hisar">Hisar</option>
                        <option value="Hooghly">Hooghly</option>
                        <option value="Hoshangabad">Hoshangabad</option>
                        <option value="Hoshiarpur">Hoshiarpur</option>
                        <option value="Hospet">Hospet</option>
                        <option value="Hosur">Hosur</option>
                        <option value="Howrah">Howrah</option>
                        <option value="Hubli">Hubli</option>
                        <option value="Hyderabad">Hyderabad</option>
                        <option value="Ichalkaranji">Ichalkaranji</option>
                        <option value="Idar">Idar</option>
                        <option value="Idukki">Idukki</option>
                        <option value="Imphal East">Imphal East</option>
                        <option value="Imphal West">Imphal West</option>
                        <option value="Indore">Indore</option>
                        <option value="Iritty">Iritty</option>
                        <option value="Itanagar">Itanagar</option>
                        <option value="Jabalpur">Jabalpur</option>
                        <option value="Jagadalpur">Jagadalpur</option>
                        <option value="Jagadhri">Jagadhri</option>
                        <option value="Jagatsinghpur">Jagatsinghpur</option>
                        <option value="Jagdalpur">Jagdalpur</option>
                        <option value="Jaggayyapeta">Jaggayyapeta</option>
                        <option value="Jahanabad">Jahanabad</option>
                        <option value="Jaintia Hills">Jaintia Hills</option>
                        <option value="Jaipur">Jaipur</option>
                        <option value="Jaisalmer">Jaisalmer</option>
                        <option value="Jajapur">Jajapur</option>
                        <option value="Jalandhar">Jalandhar</option>
                        <option value="Jalaun">Jalaun</option>
                        <option value="Jaleswar">Jaleswar</option>
                        <option value="Jalgaon">Jalgaon</option>
                        <option value="Jalna">Jalna</option>
                        <option value="Jalore">Jalore</option>
                        <option value="Jalpaiguri">Jalpaiguri</option>
                        <option value="Jamkandorana">Jamkandorana</option>
                        <option value="Jammu">Jammu</option>
                        <option value="Jamnagar">Jamnagar</option>
                        <option value="Jamner">Jamner</option>
                        <option value="Jamshedpur">Jamshedpur</option>
                        <option value="Jamtara">Jamtara</option>
                        <option value="Jamui">Jamui</option>
                        <option value="Janigir - Champa">Janigir - Champa</option>
                        <option value="Janjgir-champa">Janjgir-champa</option>
                        <option value="Jashpur">Jashpur</option>
                        <option value="Jaunpur">Jaunpur</option>
                        <option value="Jetpur">Jetpur</option>
                        <option value="Jeypore">Jeypore</option>
                        <option value="Jhabua">Jhabua</option>
                        <option value="Jhajjar">Jhajjar</option>
                        <option value="Jhalawar">Jhalawar</option>
                        <option value="Jhalod">Jhalod</option>
                        <option value="Jhansi">Jhansi</option>
                        <option value="Jharsuguda">Jharsuguda</option>
                        <option value="Jhunjhunu">Jhunjhunu</option>
                        <option value="Jind">Jind</option>
                        <option value="Jodhpur">Jodhpur</option>
                        <option value="Jorhat">Jorhat</option>
                        <option value="Junagadh">Junagadh</option>
                        <option value="Jyotiba Phule Nagar">Jyotiba Phule Nagar</option>
                        <option value="Kabri Anglong">Kabri Anglong</option>
                        <option value="Kadapa">Kadapa</option>
                        <option value="Kadi">Kadi</option>
                        <option value="Kadiri">Kadiri</option>
                        <option value="Kailashahar">Kailashahar</option>
                        <option value="Kaithal">Kaithal</option>
                        <option value="Kakinada">Kakinada</option>
                        <option value="Kalahandi">Kalahandi</option>
                        <option value="Kalka">Kalka</option>
                        <option value="Kallakurichi">Kallakurichi</option>
                        <option value="Kalol">Kalol</option>
                        <option value="Kalyani">Kalyani</option>
                        <option value="Kamrej">Kamrej</option>
                        <option value="Kamrup Metropolitian">Kamrup Metropolitian</option>
                        <option value="Kamrup Rural">Kamrup Rural</option>
                        <option value="Kanchipuram">Kanchipuram</option>
                        <option value="Kandhamal">Kandhamal</option>
                        <option value="Kandla">Kandla</option>
                        <option value="Kangra">Kangra</option>
                        <option value="Kanker">Kanker</option>
                        <option value="Kankrej">Kankrej</option>
                        <option value="Kannauj">Kannauj</option>
                        <option value="Kannur">Kannur</option>
                        <option value="Kanpur">Kanpur</option>
                        <option value="Kanpur Dehat">Kanpur Dehat</option>
                        <option value="Kanpur Nagar">Kanpur Nagar</option>
                        <option value="Kanyakumari">Kanyakumari</option>
                        <option value="Kapadwanj">Kapadwanj</option>
                        <option value="Kapurthala">Kapurthala</option>
                        <option value="Karad">Karad</option>
                        <option value="Karaikal">Karaikal</option>
                        <option value="Karauli">Karauli</option>
                        <option value="Karbi Anglong">Karbi Anglong</option>
                        <option value="Kargil">Kargil</option>
                        <option value="Karim Ganj">Karim Ganj</option>
                        <option value="Karimganj">Karimganj</option>
                        <option value="Karimnagar">Karimnagar</option>
                        <option value="Karjat">Karjat</option>
                        <option value="Karkala">Karkala</option>
                        <option value="Karnal">Karnal</option>
                        <option value="Kartarpur">Kartarpur</option>
                        <option value="Karur">Karur</option>
                        <option value="Karwar">Karwar</option>
                        <option value="Kasaragod">Kasaragod</option>
                        <option value="Kashipur">Kashipur</option>
                        <option value="Kasibugga">Kasibugga</option>
                        <option value="Kathua">Kathua</option>
                        <option value="Katihar">Katihar</option>
                        <option value="Katni">Katni</option>
                        <option value="Katwa">Katwa</option>
                        <option value="Kaushambi">Kaushambi</option>
                        <option value="Kavali">Kavali</option>
                        <option value="Kawardha">Kawardha</option>
                        <option value="Kendrapara">Kendrapara</option>
                        <option value="Kendujhar">Kendujhar</option>
                        <option value="Keonjhar">Keonjhar</option>
                        <option value="Keshod">Keshod</option>
                        <option value="Khagaria">Khagaria</option>
                        <option value="Khambhat">Khambhat</option>
                        <option value="Khamgaon">Khamgaon</option>
                        <option value="Khammam">Khammam</option>
                        <option value="Khandwa">Khandwa</option>
                        <option value="Khanna">Khanna</option>
                        <option value="Khanpur">Khanpur</option>
                        <option value="Kharagpur">Kharagpur</option>
                        <option value="Kharar">Kharar</option>
                        <option value="Khargone">Khargone</option>
                        <option value="Kheda">Kheda</option>
                        <option value="Khonsa">Khonsa</option>
                        <option value="Khopoli">Khopoli</option>
                        <option value="Khunti">Khunti</option>
                        <option value="Khurdha">Khurdha</option>
                        <option value="Kinnaur">Kinnaur</option>
                        <option value="Kiphire">Kiphire</option>
                        <option value="Kishanganj">Kishanganj</option>
                        <option value="Kishangarh">Kishangarh</option>
                        <option value="Kishtwar">Kishtwar</option>
                        <option value="Kochi">Kochi</option>
                        <option value="Kodad">Kodad</option>
                        <option value="Kodagu">Kodagu</option>
                        <option value="Koderma">Koderma</option>
                        <option value="Kohima">Kohima</option>
                        <option value="Kokrajhar">Kokrajhar</option>
                        <option value="Kolar">Kolar</option>
                        <option value="Kolasib">Kolasib</option>
                        <option value="Kolhapur">Kolhapur</option>
                        <option value="Kolkata">Kolkata</option>
                        <option value="Kollam">Kollam</option>
                        <option value="Kopergaon">Kopergaon</option>
                        <option value="Koppal">Koppal</option>
                        <option value="Koraput">Koraput</option>
                        <option value="Korba">Korba</option>
                        <option value="Koriya">Koriya</option>
                        <option value="Kosi">Kosi</option>
                        <option value="Kota">Kota</option>
                        <option value="Kothagudem">Kothagudem</option>
                        <option value="Kotputli">Kotputli</option>
                        <option value="Kottakkal">Kottakkal</option>
                        <option value="Kottarakara">Kottarakara</option>
                        <option value="Kottayam">Kottayam</option>
                        <option value="Kovilpatti">Kovilpatti</option>
                        <option value="Kozhikode">Kozhikode</option>
                        <option value="Krishna">Krishna</option>
                        <option value="Krishnagiri">Krishnagiri</option>
                        <option value="Kulgam">Kulgam</option>
                        <option value="Kullu">Kullu</option>
                        <option value="Kumbakonam">Kumbakonam</option>
                        <option value="Kundapura">Kundapura</option>
                        <option value="Kundli">Kundli</option>
                        <option value="Kupwara">Kupwara</option>
                        <option value="Kurnool">Kurnool</option>
                        <option value="Kurukshetra">Kurukshetra</option>
                        <option value="Kurung Kumey">Kurung Kumey</option>
                        <option value="Kushalnagar">Kushalnagar</option>
                        <option value="Kushinagar">Kushinagar</option>
                        <option value="Kutch">Kutch</option>
                        <option value="Lahul And Spiti">Lahul And Spiti</option>
                        <option value="Lakhimpur">Lakhimpur</option>
                        <option value="Lakhimpur Kheri">Lakhimpur Kheri</option>
                        <option value="Lakhisarai">Lakhisarai</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Lalitpur">Lalitpur</option>
                        <option value="Latehar">Latehar</option>
                        <option value="Latur">Latur</option>
                        <option value="Lawngtlai">Lawngtlai</option>
                        <option value="Leh">Leh</option>
                        <option value="Lehargaga">Lehargaga</option>
                        <option value="Lohardaga">Lohardaga</option>
                        <option value="Lohit">Lohit</option>
                        <option value="Lonavala">Lonavala</option>
                        <option value="Longleng">Longleng</option>
                        <option value="Lower Dibang Valley">Lower Dibang Valley</option>
                        <option value="Lower Subansiri">Lower Subansiri</option>
                        <option value="Lucknow">Lucknow</option>
                        <option value="Ludhiana">Ludhiana</option>
                        <option value="Lunawada">Lunawada</option>
                        <option value="Lunglei">Lunglei</option>
                        <option value="Machilipatnam">Machilipatnam</option>
                        <option value="Machiwara">Machiwara</option>
                        <option value="Madanapalle">Madanapalle</option>
                        <option value="Madhepura">Madhepura</option>
                        <option value="Madhubani">Madhubani</option>
                        <option value="Madurai">Madurai</option>
                        <option value="Magadh">Magadh</option>
                        <option value="Mahabub Nagar">Mahabub Nagar</option>
                        <option value="Mahamaya Nagar">Mahamaya Nagar</option>
                        <option value="Maharajganj">Maharajganj</option>
                        <option value="Mahasamund">Mahasamund</option>
                        <option value="Mahbubnagar">Mahbubnagar</option>
                        <option value="Mahendragarh">Mahendragarh</option>
                        <option value="Mahoba">Mahoba</option>
                        <option value="Mahuva">Mahuva</option>
                        <option value="Mainpuri">Mainpuri</option>
                        <option value="Malabar">Malabar</option>
                        <option value="Malappuram">Malappuram</option>
                        <option value="Malbazar">Malbazar</option>
                        <option value="Malda">Malda</option>
                        <option value="Malegaon">Malegaon</option>
                        <option value="Malerkotla">Malerkotla</option>
                        <option value="Malkangiri">Malkangiri</option>
                        <option value="Malkapur">Malkapur</option>
                        <option value="Malout">Malout</option>
                        <option value="Mamit">Mamit</option>
                        <option value="Mancherial">Mancherial</option>
                        <option value="Mandapeta">Mandapeta</option>
                        <option value="Mandi">Mandi</option>
                        <option value="Mandi Dabwali">Mandi Dabwali</option>
                        <option value="Mandideep">Mandideep</option>
                        <option value="Mandla">Mandla</option>
                        <option value="Mandsaur">Mandsaur</option>
                        <option value="Mandvi">Mandvi</option>
                        <option value="Mandya">Mandya</option>
                        <option value="Manendragarh">Manendragarh</option>
                        <option value="Mangalore">Mangalore</option>
                        <option value="Mangan">Mangan</option>
                        <option value="Mansa">Mansa</option>
                        <option value="Margao">Margao</option>
                        <option value="Margoa">Margoa</option>
                        <option value="Marigaon">Marigaon</option>
                        <option value="Markapur">Markapur</option>
                        <option value="Mathura">Mathura</option>
                        <option value="Mau">Mau</option>
                        <option value="Mayiladuthurai">Mayiladuthurai</option>
                        <option value="Mayurbhanj">Mayurbhanj</option>
                        <option value="Medak">Medak</option>
                        <option value="Meerut">Meerut</option>
                        <option value="Mehsana">Mehsana</option>
                        <option value="Mettupalayam">Mettupalayam</option>
                        <option value="Mewat">Mewat</option>
                        <option value="Midnapore East">Midnapore East</option>
                        <option value="Midnapore West">Midnapore West</option>
                        <option value="Miryalaguda">Miryalaguda</option>
                        <option value="Mirzapur">Mirzapur</option>
                        <option value="Modasa">Modasa</option>
                        <option value="Moga">Moga</option>
                        <option value="Mohali">Mohali</option>
                        <option value="Mokokchung">Mokokchung</option>
                        <option value="Mon">Mon</option>
                        <option value="Monghyr">Monghyr</option>
                        <option value="Moradabad">Moradabad</option>
                        <option value="Morbi">Morbi</option>
                        <option value="Morena">Morena</option>
                        <option value="Morvi">Morvi</option>
                        <option value="Motihari">Motihari</option>
                        <option value="Muktsar">Muktsar</option>
                        <option value="Mumbai">Mumbai</option>
                        <option value="Mundra">Mundra</option>
                        <option value="Munger">Munger</option>
                        <option value="Murshidabad">Murshidabad</option>
                        <option value="Muzaffarnagar">Muzaffarnagar</option>
                        <option value="Muzaffarpur">Muzaffarpur</option>
                        <option value="Mysore">Mysore</option>
                        <option value="Nabarangpur">Nabarangpur</option>
                        <option value="Nabha">Nabha</option>
                        <option value="Nadia">Nadia</option>
                        <option value="Nadiad">Nadiad</option>
                        <option value="Nagaon">Nagaon</option>
                        <option value="Nagapattinam">Nagapattinam</option>
                        <option value="Nagaur">Nagaur</option>
                        <option value="Nagercoil">Nagercoil</option>
                        <option value="Nagpur">Nagpur</option>
                        <option value="Nainital">Nainital</option>
                        <option value="Nakhtrana">Nakhtrana</option>
                        <option value="Nakodar">Nakodar</option>
                        <option value="Nalanda">Nalanda</option>
                        <option value="Nalbari">Nalbari</option>
                        <option value="Nalgonda">Nalgonda</option>
                        <option value="Naliya">Naliya</option>
                        <option value="Namakkal">Namakkal</option>
                        <option value="Namchi">Namchi</option>
                        <option value="Nanapondha">Nanapondha</option>
                        <option value="Nanded">Nanded</option>
                        <option value="Nandurbar">Nandurbar</option>
                        <option value="Naranpar">Naranpar</option>
                        <option value="Narasinghpur">Narasinghpur</option>
                        <option value="Narayangaon">Narayangaon</option>
                        <option value="Narayanpur">Narayanpur</option>
                        <option value="Narmada">Narmada</option>
                        <option value="Narnaul">Narnaul</option>
                        <option value="Naroda">Naroda</option>
                        <option value="Narsapur">Narsapur</option>
                        <option value="Narsinghpur">Narsinghpur</option>
                        <option value="Nashik">Nashik</option>
                        <option value="Navi Mumbai">Navi Mumbai</option>
                        <option value="Navsari">Navsari</option>
                        <option value="Nawadah">Nawadah</option>
                        <option value="Nawanshahr">Nawanshahr</option>
                        <option value="Nayagarh">Nayagarh</option>
                        <option value="Neemrana">Neemrana</option>
                        <option value="Neemuch">Neemuch</option>
                        <option value="Nellore">Nellore</option>
                        <option value="Neyveli">Neyveli</option>
                        <option value="Nilgiris">Nilgiris</option>
                        <option value="Nipani">Nipani</option>
                        <option value="Nizamabad">Nizamabad</option>
                        <option value="Noida">Noida</option>
                        <option value="North 24 Parganas">North 24 Parganas</option>
                        <option value="North Cachar Hills">North Cachar Hills</option>
                        <option value="Nuapada">Nuapada</option>
                        <option value="Nuziveedu">Nuziveedu</option>
                        <option value="Ongole">Ongole</option>
                        <option value="Osmanabad">Osmanabad</option>
                        <option value="Pachora">Pachora</option>
                        <option value="Padra">Padra</option>
                        <option value="Pakur">Pakur</option>
                        <option value="Palakkad">Palakkad</option>
                        <option value="Palakollu">Palakollu</option>
                        <option value="Palamu">Palamu</option>
                        <option value="Palani">Palani</option>
                        <option value="Palanpur">Palanpur</option>
                        <option value="Pali">Pali</option>
                        <option value="Palmaner">Palmaner</option>
                        <option value="Palwal">Palwal</option>
                        <option value="Panaji">Panaji</option>
                        <option value="Panch Mahals">Panch Mahals</option>
                        <option value="Panchkula">Panchkula</option>
                        <option value="Panchmahal">Panchmahal</option>
                        <option value="Pandharpur">Pandharpur</option>
                        <option value="Panipat">Panipat</option>
                        <option value="Panna">Panna</option>
                        <option value="Papum Pare">Papum Pare</option>
                        <option value="Paradip">Paradip</option>
                        <option value="Parbhani">Parbhani</option>
                        <option value="Parvathipuram">Parvathipuram</option>
                        <option value="Pasighat">Pasighat</option>
                        <option value="Patan">Patan</option>
                        <option value="Pathanamthitta">Pathanamthitta</option>
                        <option value="Pathankot">Pathankot</option>
                        <option value="Patiala">Patiala</option>
                        <option value="Patna">Patna</option>
                        <option value="Patodi">Patodi</option>
                        <option value="Pauri Garhwal">Pauri Garhwal</option>
                        <option value="Pavijetpur">Pavijetpur</option>
                        <option value="Pen">Pen</option>
                        <option value="Peowa">Peowa</option>
                        <option value="Perambalur">Perambalur</option>
                        <option value="Peren">Peren</option>
                        <option value="Phagwara">Phagwara</option>
                        <option value="Phaltan">Phaltan</option>
                        <option value="Phek">Phek</option>
                        <option value="Phillaur">Phillaur</option>
                        <option value="Phusro">Phusro</option>
                        <option value="Piduguralla">Piduguralla</option>
                        <option value="Pileru">Pileru</option>
                        <option value="Pilibhit">Pilibhit</option>
                        <option value="Pimpalgaon">Pimpalgaon</option>
                        <option value="Pinjore">Pinjore</option>
                        <option value="Piparia">Piparia</option>
                        <option value="Pithampur">Pithampur</option>
                        <option value="Pithoragarh">Pithoragarh</option>
                        <option value="Pollachi">Pollachi</option>
                        <option value="Ponda">Ponda</option>
                        <option value="Pondicherry">Pondicherry</option>
                        <option value="Pontashaib">Pontashaib</option>
                        <option value="Poonch">Poonch</option>
                        <option value="Porbandar">Porbandar</option>
                        <option value="Prakasam">Prakasam</option>
                        <option value="Pratapgarh">Pratapgarh</option>
                        <option value="Proddattur">Proddattur</option>
                        <option value="Pudukkottai">Pudukkottai</option>
                        <option value="Pulwama">Pulwama</option>
                        <option value="Pundri">Pundri</option>
                        <option value="Pune">Pune</option>
                        <option value="Puri">Puri</option>
                        <option value="Purnia">Purnia</option>
                        <option value="Purulia">Purulia</option>
                        <option value="Pusad">Pusad</option>
                        <option value="Pusad">Pusad</option>
                        <option value="Puttur">Puttur</option>
                        <option value="Radhanpur">Radhanpur</option>
                        <option value="Rae Bareli">Rae Bareli</option>
                        <option value="Raghunathpur">Raghunathpur</option>
                        <option value="Rahuri">Rahuri</option>
                        <option value="Raichur">Raichur</option>
                        <option value="Raigad">Raigad</option>
                        <option value="Raiganj">Raiganj</option>
                        <option value="Raigarh">Raigarh</option>
                        <option value="Raikot">Raikot</option>
                        <option value="Railway Koduru">Railway Koduru</option>
                        <option value="Raipur">Raipur</option>
                        <option value="Rairangpur">Rairangpur</option>
                        <option value="Raisen">Raisen</option>
                        <option value="Rajahmundry">Rajahmundry</option>
                        <option value="Rajam">Rajam</option>
                        <option value="Rajapalayam">Rajapalayam</option>
                        <option value="Rajgangapur">Rajgangapur</option>
                        <option value="Rajgarh">Rajgarh</option>
                        <option value="Rajgurunagar">Rajgurunagar</option>
                        <option value="Rajkot">Rajkot</option>
                        <option value="Rajnandgaon">Rajnandgaon</option>
                        <option value="Rajouri">Rajouri</option>
                        <option value="Rajpipla">Rajpipla</option>
                        <option value="Rajpura">Rajpura</option>
                        <option value="Rajsamand">Rajsamand</option>
                        <option value="Ramagundam">Ramagundam</option>
                        <option value="Ramanagara">Ramanagara</option>
                        <option value="Ramanathapuram">Ramanathapuram</option>
                        <option value="Ramban">Ramban</option>
                        <option value="Ramgarh">Ramgarh</option>
                        <option value="Rampur">Rampur</option>
                        <option value="Ranaghat">Ranaghat</option>
                        <option value="Ranavav Porbandar">Ranavav Porbandar</option>
                        <option value="Ranchi">Ranchi</option>
                        <option value="Rangareddy">Rangareddy</option>
                        <option value="Raniganj">Raniganj</option>
                        <option value="Rapar">Rapar</option>
                        <option value="Ratlam">Ratlam</option>
                        <option value="Ratnagiri">Ratnagiri</option>
                        <option value="Rayachoti">Rayachoti</option>
                        <option value="Rayagada">Rayagada</option>
                        <option value="Reasi">Reasi</option>
                        <option value="Repalle">Repalle</option>
                        <option value="Rewa">Rewa</option>
                        <option value="Rewari">Rewari</option>
                        <option value="Ri-bhoi">Ri-bhoi</option>
                        <option value="Rishikesh">Rishikesh</option>
                        <option value="Roha">Roha</option>
                        <option value="Rohtak">Rohtak</option>
                        <option value="Rohtas">Rohtas</option>
                        <option value="Roing">Roing</option>
                        <option value="Roorkee">Roorkee</option>
                        <option value="Ropar">Ropar</option>
                        <option value="Rourkela">Rourkela</option>
                        <option value="Rudraprayag">Rudraprayag</option>
                        <option value="Rudrapur">Rudrapur</option>
                        <option value="Rupnagar">Rupnagar</option>
                        <option value="Sabarkantha">Sabarkantha</option>
                        <option value="Sachin">Sachin</option>
                        <option value="Sagar">Sagar</option>
                        <option value="Sagar">Saharanpur</option>
                        <option value="Saharsa">Saharsa</option>
                        <option value="Sahebganj">Sahebganj</option>
                        <option value="Saiha">Saiha</option>
                        <option value="Salem">Salem</option>
                        <option value="Salepur">Salepur</option>
                        <option value="Samalkota">Samalkota</option>
                        <option value="Samastipur">Samastipur</option>
                        <option value="Samba">Samba</option>
                        <option value="Sambalpur">Sambalpur</option>
                        <option value="Sanand">Sanand</option>
                        <option value="Sanga Reddy">Sanga Reddy</option>
                        <option value="Sangamner">Sangamner</option>
                        <option value="Sangli">Sangli</option>
                        <option value="Sangrur">Sangrur</option>
                        <option value="Sanjan">Sanjan</option>
                        <option value="Sant Kabir Nagar">Sant Kabir Nagar</option>
                        <option value="Sant Ravidas Nagar">Sant Ravidas Nagar</option>
                        <option value="Santrampura">Santrampura</option>
                        <option value="Saran">Saran</option>
                        <option value="Sasaram">Sasaram</option>
                        <option value="Satara">Satara</option>
                        <option value="Satna">Satna</option>
                        <option value="Sawai Madhopur">Sawai Madhopur</option>
                        <option value="Sawantwadi">Sawantwadi</option>
                        <option value="Sayan">Sayan</option>
                        <option value="Secunderabad">Secunderabad</option>
                        <option value="Sedam">Sedam</option>
                        <option value="Sehore">Sehore</option>
                        <option value="Semiliguda">Semiliguda</option>
                        <option value="Senapati">Senapati</option>
                        <option value="Seoni">Seoni</option>
                        <option value="Seppa">Seppa</option>
                        <option value="Seraikela Kharsawan">Seraikela Kharsawan</option>
                        <option value="Serchhip">Serchhip</option>
                        <option value="Shahada">Shahada</option>
                        <option value="Shahapur">Shahapur</option>
                        <option value="Shahdol">Shahdol</option>
                        <option value="Shahjahanpur">Shahjahanpur</option>
                        <option value="Shahkot">Shahkot</option>
                        <option value="Shahpura">Shahpura</option>
                        <option value="Shajapur">Shajapur</option>
                        <option value="Sheikhpura">Sheikhpura</option>
                        <option value="Sheopur">Sheopur</option>
                        <option value="Shikrapur">Shikrapur</option>
                        <option value="Shilong">Shilong</option>
                        <option value="Shimla">Shimla</option>
                        <option value="Shimoga">Shimoga</option>
                        <option value="Shirpur">Shirpur</option>
                        <option value="Shirur">Shirur</option>
                        <option value="Shirval">Shirval</option>
                        <option value="Shivpuri">Shivpuri</option>
                        <option value="Shopian">Shopian</option>
                        <option value="Shravasti">Shravasti</option>
                        <option value="Shrigonda Kashti">Shrigonda Kashti</option>
                        <option value="Shrirampur">Shrirampur</option>
                        <option value="Sibsagar">Sibsagar</option>
                        <option value="Siddharthnagar">Siddharthnagar</option>
                        <option value="Siddipet">Siddipet</option>
                        <option value="Sidhi">Sidhi</option>
                        <option value="Sikar">Sikar</option>
                        <option value="Silchar">Silchar</option>
                        <option value="Siliguri">Siliguri</option>
                        <option value="Silvasa">Silvasa</option>
                        <option value="Silvassa">Silvassa</option>
                        <option value="Silvassa">Silvassa</option>
                        <option value="Simdega">Simdega</option>
                        <option value="Sindhudurg">Sindhudurg</option>
                        <option value="Sirmaur">Sirmaur</option>
                        <option value="Sirohi">Sirohi</option>
                        <option value="Sirsa">Sirsa</option>
                        <option value="Siruguppa">Siruguppa</option>
                        <option value="Sitamarhi">Sitamarhi</option>
                        <option value="Sitapur">Sitapur</option>
                        <option value="Sivagangai">Sivagangai</option>
                        <option value="Sivakasi">Sivakasi</option>
                        <option value="Siwan">Siwan</option>
                        <option value="Solan">Solan</option>
                        <option value="Solapur">Solapur</option>
                        <option value="Somnath Junagadha">Somnath Junagadha</option>
                        <option value="Sonbhadra">Sonbhadra</option>
                        <option value="Sonepur">Sonepur</option>
                        <option value="Sonipat">Sonipat</option>
                        <option value="Sonitpur">Sonitpur</option>
                        <option value="Soro">Soro</option>
                        <option value="South 24 Parganas">South 24 Parganas</option>
                        <option value="South Garo Hills">South Garo Hills</option>
                        <option value="South Goa">South Goa</option>
                        <option value="Sri Ganganagar">Sri Ganganagar</option>
                        <option value="Srikakulam">Srikakulam</option>
                        <option value="Srikalahasti">Srikalahasti</option>
                        <option value="Srinagar">Srinagar</option>
                        <option value="Sriperumbudur">Sriperumbudur</option>
                        <option value="Sujangarh">Sujangarh</option>
                        <option value="Sullurpeta">Sullurpeta</option>
                        <option value="Sultanpur">Sultanpur</option>
                        <option value="Sundargarh">Sundargarh</option>
                        <option value="Supaul">Supaul</option>
                        <option value="Surat">Surat</option>
                        <option value="Suratgarh">Suratgarh</option>
                        <option value="Surendernagar">Surendernagar</option>
                        <option value="Surendra Nagar">Surendra Nagar</option>
                        <option value="Surendranagar">Surendranagar</option>
                        <option value="Surguja">Surguja</option>
                        <option value="Suryapet">Suryapet</option>
                        <option value="Tadipatri">Tadipatri</option>
                        <option value="Talawandi Saboo">Talawandi Saboo</option>
                        <option value="Talcher">Talcher</option>
                        <option value="Talegaon Dabhade">Talegaon Dabhade</option>
                        <option value="Tamenglong">Tamenglong</option>
                        <option value="Tandur">Tandur</option>
                        <option value="Tanuku">Tanuku</option>
                        <option value="Tarakeshwar">Tarakeshwar</option>
                        <option value="Taraori">Taraori</option>
                        <option value="Tarn Taran">Tarn Taran</option>
                        <option value="Tawang">Tawang</option>
                        <option value="Tehri Garhwal And Uttarkashi">Tehri Garhwal And Uttarkashi</option>
                        <option value="Tenali">Tenali</option>
                        <option value="Tenkasi">Tenkasi</option>
                        <option value="Tezpur">Tezpur</option>
                        <option value="Tezu">Tezu</option>
                        <option value="Thane">Thane</option>
                        <option value="Thanjavur">Thanjavur</option>
                        <option value="Theni">Theni</option>
                        <option value="Thiruvalla">Thiruvalla</option>
                        <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                        <option value="Thoothukudi">Thoothukudi</option>
                        <option value="Thoubal">Thoubal</option>
                        <option value="Thrissur">Thrissur</option>
                        <option value="Tikamgarh">Tikamgarh</option>
                        <option value="Tinsukia">Tinsukia</option>
                        <option value="Tirap">Tirap</option>
                        <option value="Tirhut">Tirhut</option>
                        <option value="Tiruchendur">Tiruchendur</option>
                        <option value="Tiruchengode">Tiruchengode</option>
                        <option value="Tiruchirapalli">Tiruchirapalli</option>
                        <option value="Tirunelveli">Tirunelveli</option>
                        <option value="Tirupati">Tirupati</option>
                        <option value="Tirupattur">Tirupattur</option>
                        <option value="Tiruppur">Tiruppur</option>
                        <option value="Tirur">Tirur</option>
                        <option value="Tiruvallur">Tiruvallur</option>
                        <option value="Tiruvannamalai">Tiruvannamalai</option>
                        <option value="Tiruvarur">Tiruvarur</option>
                        <option value="Tonk">Tonk</option>
                        <option value="Travancore">Travancore</option>
                        <option value="Tuensang">Tuensang</option>
                        <option value="Tumkur">Tumkur</option>
                        <option value="Tuni">Tuni</option>
                        <option value="Udaipur">Udaipur</option>
                        <option value="Udaipur (tripura)">Udaipur (tripura)</option>
                        <option value="Udalguri">Udalguri</option>
                        <option value="Udgir">Udgir</option>
                        <option value="Udhagamandalam">Udhagamandalam</option>
                        <option value="Udham Singh Nagar">Udham Singh Nagar</option>
                        <option value="Udhampur">Udhampur</option>
                        <option value="Udumalpet">Udumalpet</option>
                        <option value="Udupi And Uttara Kannada">Udupi And Uttara Kannada</option>
                        <option value="Udwada">Udwada</option>
                        <option value="Ujjain">Ujjain</option>
                        <option value="Ukhrul">Ukhrul</option>
                        <option value="Umaria">Umaria</option>
                        <option value="Umbergaon">Umbergaon</option>
                        <option value="Una">Una</option>
                        <option value="Unjha">Unjha</option>
                        <option value="Unnao">Unnao</option>
                        <option value="Upper Dibang Valley">Upper Dibang Valley</option>
                        <option value="Upper Siang">Upper Siang</option>
                        <option value="Upper Subansiri">Upper Subansiri</option>
                        <option value="Uttar Dinajpur">Uttar Dinajpur</option>
                        <option value="Vadodara">Vadodara</option>
                        <option value="Vallabh Vidyanagar">Vallabh Vidyanagar</option>
                        <option value="Valod">Valod</option>
                        <option value="Valsad">Valsad</option>
                        <option value="Vapi">Vapi</option>
                        <option value="Varanasi">Varanasi</option>
                        <option value="Vellore">Vellore</option>
                        <option value="Veraval">Veraval</option>
                        <option value="Vidisha">Vidisha</option>
                        <option value="Vijapur">Vijapur</option>
                        <option value="Vijayawada">Vijayawada</option>
                        <option value="Viluppuram">Viluppuram</option>
                        <option value="Virpur">Virpur</option>
                        <option value="Virudhachalam">Virudhachalam</option>
                        <option value="Virudhunagar">Virudhunagar</option>
                        <option value="Visakhapatnam">Visakhapatnam</option>
                        <option value="Visnagar">Visnagar</option>
                        <option value="Vizianagaram">Vizianagaram</option>
                        <option value="Vyara">Vyara</option>
                        <option value="Waghodia">Waghodia</option>
                        <option value="Wani">Wani</option>
                        <option value="Warananagar">Warananagar</option>
                        <option value="Warangal">Warangal</option>
                        <option value="Wardha">Wardha</option>
                        <option value="Warud">Warud</option>
                        <option value="Washim">Washim</option>
                        <option value="Wayanad">Wayanad</option>
                        <option value="West Garo Hills">West Garo Hills</option>
                        <option value="West Godavari">West Godavari</option>
                        <option value="West Kameng">West Kameng</option>
                        <option value="West Khasi Hills">West Khasi Hills</option>
                        <option value="West Siang">West Siang</option>
                        <option value="West Singhbhum">West Singhbhum</option>
                        <option value="Wokha">Wokha</option>
                        <option value="Yadgir">Yadgir</option>
                        <option value="Yamuna Nagar">Yamuna Nagar</option>
                        <option value="Yavatmal">Yavatmal</option>
                        <option value="Yemmiganur">Yemmiganur</option>
                        <option value="Yingkiong">Yingkiong</option>
                        <option value="Zirakpur">Zirakpur</option>
                        <option value="Ziro">Ziro</option>
                        <option value="Zunheboto">Zunheboto</option>

                    </select>

                </div>
                <div class="col-lg-4">
                    <div class="select-box">
                        <label class="float-left">Salary Received In</label>
                        <select name="salary_mode" id="salary_mode" class="form-control">
                            <option value="">Please select</option>
                            <option class="cheque_cash_option show" value="Cheque">Cheque</option>
                            <option class="cheque_cash_option show" value="Cash">Cash</option>
                            <option value="HDFC">HDFC</option>
                            <option value="SBI">SBI</option>
                            <option value="ICICI">ICICI</option>
                            <option value="AXIS">AXIS</option>
                            <option value="KOTAK">KOTAK</option>
                            <option value="Standard Chartered Bank">Standard Chartered Bank</option>
                            <option value="AU Small Finance Bank">AU Small Finance Bank</option>
                            <option value="Abhyuday Co-op Bank Ltd">Abhyuday Co-op Bank Ltd</option>
                            <option value="Allahabad Bank">Allahabad Bank</option>
                            <option value="Andhra Bank">Andhra Bank</option>
                            <option value="Bank of Baroda">Bank of Baroda</option>
                            <option value="Bank of India">Bank of India</option>
                            <option value="Bank of Maharasthra">Bank of Maharasthra</option>
                            <option value="Bank of Rajasthan">Bank of Rajasthan</option>
                            <option value="Bassein Catholic Cooperative Bank Limited">Bassein Catholic Cooperative Bank
                                Limited</option>
                            <option value="Canara Bank">Canara Bank</option>
                            <option value="Capital Small Finance Bank">Capital Small Finance Bank</option>
                            <option value="Catholic Syrian Bank">Catholic Syrian Bank</option>
                            <option value="Central Bank of India">Central Bank of India</option>
                            <option value="Citibank">Citibank</option>
                            <option value="City Union Bank">City Union Bank</option>
                            <option value="Corporation Bank">Corporation Bank</option>
                            <option value="DBS Bank">DBS Bank</option>
                            <option value="DCB">DCB</option>
                            <option value="Dena Bank">Dena Bank</option>
                            <option value="Deutsche Bank">Deutsche Bank</option>
                            <option value="Dhanalakshmi Bank Ltd">Dhanalakshmi Bank Ltd</option>
                            <option value="Dombivli Nagari Sahakari Bank Limited">Dombivli Nagari Sahakari Bank Limited
                            </option>
                            <option value="Federal Bank">Federal Bank</option>
                            <option value="HSBC Bank">HSBC Bank</option>
                            <option value="IDBI Bank">IDBI Bank</option>
                            <option value="IDFC First Bank">IDFC First Bank</option>
                            <option value="ING Vysya">ING Vysya</option>
                            <option value="Indian Bank">Indian Bank</option>
                            <option value="Indian Overseas Bank">Indian Overseas Bank</option>
                            <option value="IndusInd Bank">IndusInd Bank</option>
                            <option value="JK Bank">J&amp;K Bank</option>
                            <option value="Janaseva Sahakari Bank Limited">Janaseva Sahakari Bank Limited</option>
                            <option value="Kalyan Janata Sahakari Bank">Kalyan Janata Sahakari Bank</option>
                            <option value="Karnataka Bank">Karnataka Bank</option>
                            <option value="Karur Vysya Bank">Karur Vysya Bank</option>
                            <option value="Lakshmi Vilas bank">Lakshmi Vilas bank</option>
                            <option value="Nagpur Nagarik Sahakari Bank Limited">Nagpur Nagarik Sahakari Bank Limited
                            </option>
                            <option value="Nutan Nagarik Sahakari Bank Limited">Nutan Nagarik Sahakari Bank Limited
                            </option>
                            <option value="Oriental Bank of Commerce">Oriental Bank of Commerce</option>
                            <option value="Prathama Bank">Prathama Bank</option>
                            <option value="Prime Cooperative Bank Limited">Prime Cooperative Bank Limited</option>
                            <option value="Punjab &amp; Maharashtra Co-op Bank Ltd">Punjab &amp; Maharashtra Co-op Bank
                                Ltd</option>
                            <option value="Punjab &amp; Sind bank">Punjab &amp; Sind bank</option>
                            <option value="Punjab National Bank">Punjab National Bank</option>
                            <option value="RBL Bank Ltd">RBL Bank Ltd</option>
                            <option value="Saraswat Bank">Saraswat Bank</option>
                            <option value="South Indian Bank">South Indian Bank</option>
                            <option value="State Bank of Bikaner &amp; Jaipur">State Bank of Bikaner &amp; Jaipur
                            </option>
                            <option value="State Bank of Hyderabad">State Bank of Hyderabad</option>
                            <option value="State Bank of Indore">State Bank of Indore</option>
                            <option value="State Bank of Mysore">State Bank of Mysore</option>
                            <option value="State Bank of Patiala">State Bank of Patiala</option>
                            <option value="State Bank of Travancore">State Bank of Travancore</option>
                            <option value="Syndicate Bank">Syndicate Bank</option>
                            <option value="Tamilnad Mercantile Bank Ltd">Tamilnad Mercantile Bank Ltd</option>
                            <option value="The Kangra Cooperative Bank Limited">The Kangra Cooperative Bank Limited
                            </option>
                            <option value="The Kurmanchal Nagar Sahakari Bank Limited">The Kurmanchal Nagar Sahakari
                                Bank Limited</option>
                            <option value="The Mehsana Urban Cooperative Bank">The Mehsana Urban Cooperative Bank
                            </option>
                            <option value="The Nainital Bank Ltd">The Nainital Bank Ltd</option>
                            <option value="The Vishweshwar Sahakari Bank Limited">The Vishweshwar Sahakari Bank Limited
                            </option>
                            <option value="UCO Bank">UCO Bank</option>
                            <option value="Union Bank of India">Union Bank of India</option>
                            <option value="United Bank of India">United Bank of India</option>
                            <option value="Vijaya Bank">Vijaya Bank</option>
                            <option value="Vijaya Bank">Yes Bank</option>
                        </select>
                    </div>
                </div>
                
            </div>
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>
        <fieldset>

            <h2 class="fs-title">Compare and Apply for Personal Loans</h2>
            <h3 class="fs-subtitle">Let us help you find the most suitable offers.</h3>
            <div class="row">
                <div class="col-lg-4">
                    <label class="float-left">Total EMI you pay currently</label>
                    <input type="text" name="emi" placeholder="XXXXXXXXXXX" />
                </div>
                <div class="col-lg-4">
                    <div class="select-box">
                        <label class="float-left">Your Full Name </label>
                        <input type="text" name="full_name" placeholder="Enter Your Full Name" />
                        <!--  -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <label class="float-left">Your PAN card number</label>
                    <input type="text" name="pan_card" placeholder="Your PAN card number" />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="select-box">
                        <label class="float-left">Date of Birth</label>
                        <input type="date" name="dob" placeholder="Date of Birth" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <label class="float-left">Email Address</label>
                    <input type="email" name="email" placeholder="Email Address" />
                </div>
                <div class="col-lg-4">
                    <label class="float-left">Your tenure in the current company</label>
                    <select name="current_company_tenure" class="form-control">
                        <option value="">Please select</option>
                        <option value="3">0-3 months</option>
                        <option value="6">3-6 months</option>
                        <option value="12">6-12 months</option>
                        <option value="24">1-2 years</option>
                        <option value="36">2-3 years</option>
                        <option value="60">3-5 years</option>
                        <option value="72">5+ years</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="select-box">
                        <label class="float-left">Your total work experience</label>
                        <select name="experience" class="form-control">
                            <option value="">Please select</option>
                            <option value="3">0-3 months</option>
                            <option value="6">3-6 months</option>
                            <option value="12">6-12 months</option>
                            <option value="24">1-2 years</option>
                            <option value="36">2-3 years</option>
                            <option value="60">3-5 years</option>
                            <option value="72">5+ years</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <label class="float-left"> Residence Type</label>
                    <select name="Residence_type" class="form-control">
                        <option value="">Please select</option>
                        <option value="Owned by self/spouse">Owned by self/spouse</option>
                        <option value="Owned by parents/sibling">Owned by parents/sibling</option>
                        <option value="Rented- With family">Rented- With family</option>
                        <option value="Rented- With friends">Rented- With friends</option>
                        <option value="Rented- Staying alone">Rented- Staying alone</option>
                        <option value="Paying guest">Paying guest</option>
                        <option value="Hostel">Hostel</option>
                        <option value="Company provided">Company provided</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <label class="float-left">What is the purpose of your Loan</label>
                    <select name="purpose_of_loan" class="form-control">
                        <option value="">Please select</option>
                        <option value="Purchase of household/electronic goods">Purchase of household/electronic goods
                        </option>
                        <option value="Household expenses">Household expenses</option>
                        <option value="Loan/Card Repayment">Loan/Card Repayment</option>
                        <option value="Education/related expenses">Education/related expenses</option>
                        <option value="Home buying/renovation">Home buying/renovation</option>
                        <option value="Urgent Medical Expenses">Urgent Medical Expenses</option>
                        <option value="Financial security">Financial security</option>
                        <option value="Travel/Relocation Related">Travel/Relocation Related</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
            </div>

            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>
        <fieldset>
            <h2 class="fs-title">Best offer for you</h2>
            <h3 class="fs-subtitle">Find the personal loan best suited for you.</h3>
            <div class="row">
                <div class="col-lg-4">
                    <img width="200" height="80" src="assets/img/bank/Axis-Bank.jpg"
                        class="vc_single_image-img attachment-medium" alt="" loading="lazy">
                </div>
                <div class="col-lg-4">
                    <p class="f-color">@10.30%</p>
                </div>
                <div class="col-lg-4">
                    <input type="radio" name="bank_name" value="indusind bank">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img width="200" height="80" src="assets/img/bank/Bajaj-Finserv.jpg"
                        class="vc_single_image-img attachment-medium" alt="" loading="lazy">
                </div>
                <div class="col-lg-4">
                    <p class="f-color">@10.50%</p>
                </div>
                <div class="col-lg-4">
                    <input type="radio" name="bank_name" value="indusind bank">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img width="200" height="80" src="assets/img/bank/HDFC-Bank.jpg"
                        class="vc_single_image-img attachment-medium" alt="" loading="lazy">
                </div>
                <div class="col-lg-4">
                    <p class="f-color">@09.50%</p>
                </div>
                <div class="col-lg-4">
                    <input type="radio" name="bank_name" checked value="indusind bank">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img width="200" height="80" src="assets/img/bank/ICICI-Bank.jpg"
                        class="vc_single_image-img attachment-medium" alt="" loading="lazy">
                </div>
                <div class="col-lg-4">
                    <p class="f-color">@11.00%</p>
                </div>
                <div class="col-lg-4">
                    <input type="radio" name="bank_name" value="indusind bank">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img width="200" height="80" src="assets/img/bank/IDFC-First-Bank.jpg"
                        class="vc_single_image-img attachment-medium" alt="" loading="lazy">
                </div>
                <div class="col-lg-4">
                    <p class="f-color">@11:25%</p>
                </div>
                <div class="col-lg-4">
                    <input type="radio" name="bank_name" value="indusind bank">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img width="200" height="80" src="assets/img/bank/IndusInd-Bank.jpg"
                        class="vc_single_image-img attachment-medium" alt="" loading="lazy">
                </div>
                <div class="col-lg-4">
                    <p class="f-color">@11:50%</p>
                </div>
                <div class="col-lg-4">
                    <input type="radio" name="bank_name" value="indusind bank">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img width="200" height="80" src="assets/img/bank/Kotak-Mahindra-Bank.jpg"
                        class="vc_single_image-img attachment-medium" alt="" loading="lazy">
                </div>
                <div class="col-lg-4">
                    <p class="f-color">@12.00%</p>
                </div>
                <div class="col-lg-4">
                    <input type="radio" name="bank_name" value="indusind bank">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img width="200" height="80" src="assets/img/bank/Tata-Capital.jpg"
                        class="vc_single_image-img attachment-medium" alt="" loading="lazy">
                </div>
                <div class="col-lg-4">
                    <p class="f-color">@12.00%</p>
                </div>
                <div class="col-lg-4">
                    <input type="radio" name="bank_name" value="indusind bank">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img width="200" height="80" src="assets/img/bank/Yes-Bank.jpg"
                        class="vc_single_image-img attachment-medium" alt="" loading="lazy">
                </div>
                <div class="col-lg-4">
                    <p class="f-color">@11.00%</p>
                </div>
                <div class="col-lg-4">
                    <input type="radio" name="bank_name" value="indusind bank">
                </div>
            </div>
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="submit" name="submit" id="btn_submit" class="submit action-button" value="Submit" />

        </fieldset>

    </form>
    </section>
    <?php include('layout/footer.php');?>

    <script>
        //jQuery time
        var current_fs, next_fs, previous_fs; //fieldsets
        var left, opacity, scale; //fieldset properties which we will animate
        var animating; //flag to prevent quick multi-click glitches

        $(".next").click(function () {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //activate next step on progressbar using the index of next_fs
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            current_fs.hide();
            animating = false;
            next_fs.show();

        });

        $(".previous").click(function () {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //de-activate current step on progressbar
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();
            current_fs.hide();
            animating = false;
            // //hide the current fieldset with style
            // current_fs.animate({opacity: 0}, {
            // 	step: function(now, mx) {
            // 		//as the opacity of current_fs reduces to 0 - stored in "now"
            // 		//1. scale previous_fs from 80% to 100%
            // 		scale = 0.8 + (1 - now) * 0.2;
            // 		//2. take current_fs to the right(50%) - from 0%
            // 		left = ((1-now) * 50)+"%";
            // 		//3. increase opacity of previous_fs to 1 as it moves in
            // 		opacity = 1 - now;
            // 		current_fs.css({'left': left});
            // 		previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
            // 	}, 
            // 	duration: 800, 
            // 	complete: function(){
            // 		current_fs.hide();
            // 		animating = false;
            // 	}, 
            // 	//this comes from the custom easing plugin
            // 	easing: 'easeInOutBack'
            // });
        });

        // $("#btn_submit").click(function () {
            
        // })
    </script>