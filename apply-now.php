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
        width: 1400px;
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
        width: 80%;
        margin: 0 10%;

        /*stacking fieldsets above each other*/
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
    <form id="msform" class="apply-form">

        <!-- fieldsets -->
        <fieldset>
            <h2 class="fs-title">Looking for a Loan?</h2>
            <h3 class="fs-subtitle">Let us help you find the most suitable offers.</h3>
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <label class="float-left">Mobile Number</label>
                    <input type="number" name="number" placeholder="Will check offer against your number" />
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
                    <input type="text" name="ammount" placeholder="Your desired loan amount" />
                </div>
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
                    <label class="float-left">Your net monthly income</label>
                    <input type="text" name="monthly_income" placeholder="Your net monthly income" />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <label class="float-left">Your current city of residence</label>
                    <select class="form-control">
                        <option value="">Please select</option>
                        <option value="551">Delhi</option>
                        <option value="555">Gurgaon</option>
                        <option value="553">Noida</option>
                        <option value="302">Mumbai</option>
                        <option value="207">Bangalore</option>
                        <option value="309">Pune</option>
                        <option value="420">Chennai</option>
                        <option value="6">Hyderabad</option>
                        <option value="124">Surat</option>
                        <option value="103">Ahmedabad</option>
                        <option value="674">Abdasa</option>
                        <option value="576">Abohar</option>
                        <option value="915">Abu Road</option>
                        <option value="886">Achalpur Paratwada</option>
                        <option value="920">Adampur</option>
                        <option value="988">Addanki</option>
                        <option value="1">Adilabad</option>
                        <option value="693">Adipur</option>
                        <option value="989">Adoni</option>
                        <option value="450">Agartala</option>
                        <option value="455">Agra</option>
                        <option value="103">Ahmedabad</option>
                        <option value="694">Ahmedb</option>
                        <option value="925">Ahmedgarh</option>
                        <option value="285">Ahmednagar</option>
                        <option value="337">Aizawl</option>
                        <option value="408">Ajmer</option>
                        <option value="949">Akluj</option>
                        <option value="286">Akola</option>
                        <option value="888">Akot</option>
                        <option value="662">Alappuzha</option>
                        <option value="950">Alibag</option>
                        <option value="456">Aligarh</option>
                        <option value="1099">Alipurdr</option>
                        <option value="457">Allahabad</option>
                        <option value="663">Alleppey</option>
                        <option value="828">Almora</option>
                        <option value="747">Along</option>
                        <option value="580">Aluva</option>
                        <option value="552">Alwar</option>
                        <option value="990">Amalapuram</option>
                        <option value="951">Amalner</option>
                        <option value="683">Amalsad</option>
                        <option value="104">Amareli</option>
                        <option value="684">Ambaji</option>
                        <option value="128">Ambala</option>
                        <option value="451">Ambassa</option>
                        <option value="458">Ambedkar Nagar</option>
                        <option value="881">Ambhajogai</option>
                        <option value="786">Ambikapur</option>
                        <option value="646">Ambur</option>
                        <option value="287">Amravati</option>
                        <option value="799">Amreli</option>
                        <option value="388">Amritsar</option>
                        <option value="991">Anakapalli</option>
                        <option value="105">Anand</option>
                        <option value="2">Anantapur</option>
                        <option value="160">Anantnag</option>
                        <option value="24">Andman &amp; Nicobar</option>
                        <option value="1130">Angamalli</option>
                        <option value="356">Angul</option>
                        <option value="685">Anjar</option>
                        <option value="25">Anjaw</option>
                        <option value="609">Ankleshwar</option>
                        <option value="914">Anupgarh</option>
                        <option value="237">Anuppur</option>
                        <option value="1129">Arambagh</option>
                        <option value="1146">Arani</option>
                        <option value="773">Araria</option>
                        <option value="419">Ariyalur</option>
                        <option value="1116">Arrah</option>
                        <option value="563">Asansol</option>
                        <option value="238">Ashoknagar</option>
                        <option value="877">Ashta</option>
                        <option value="992">Attur</option>
                        <option value="459">Auraiya</option>
                        <option value="288">Aurangabad</option>
                        <option value="764">Aurangabad (bihar)</option>
                        <option value="460">Azamgarh</option>
                        <option value="938">B C Road</option>
                        <option value="461">Badaun</option>
                        <option value="621">Baddi</option>
                        <option value="872">Badlapur</option>
                        <option value="206">Bagalkote</option>
                        <option value="829">Bageshwar</option>
                        <option value="462">Bagpat</option>
                        <option value="617">Bahadurgarh</option>
                        <option value="463">Bahraich</option>
                        <option value="787">Baikunthpur</option>
                        <option value="686">Bajwa</option>
                        <option value="42">Baksa</option>
                        <option value="916">Balachaur</option>
                        <option value="239">Balaghat</option>
                        <option value="928">Balasinor</option>
                        <option value="667">Balasore</option>
                        <option value="357">Baleswar</option>
                        <option value="464">Ballia</option>
                        <option value="465">Balrampur</option>
                        <option value="981">Balugaon</option>
                        <option value="1101">Balurghat</option>
                        <option value="796">Banaskantha</option>
                        <option value="106">Banaskhantha</option>
                        <option value="466">Banda</option>
                        <option value="161">Bandipore</option>
                        <option value="922">Banga</option>
                        <option value="780">Banka</option>
                        <option value="532">Bankura</option>
                        <option value="809">Banswara</option>
                        <option value="467">Barabanki</option>
                        <option value="664">Baramati</option>
                        <option value="162">Baramulla</option>
                        <option value="824">Baran</option>
                        <option value="897">Barara</option>
                        <option value="533">Bardhaman</option>
                        <option value="687">Bardoli</option>
                        <option value="468">Bareilly</option>
                        <option value="358">Bargarh</option>
                        <option value="1119">Baripada</option>
                        <option value="810">Barmer</option>
                        <option value="389">Barnala</option>
                        <option value="43">Barpeta</option>
                        <option value="880">Barshi</option>
                        <option value="240">Barwani</option>
                        <option value="883">Basmat</option>
                        <option value="81">Bastar</option>
                        <option value="469">Basti</option>
                        <option value="390">Bathinda</option>
                        <option value="675">Bavala</option>
                        <option value="640">Beawar</option>
                        <option value="290">Beed</option>
                        <option value="923">Begowal</option>
                        <option value="586">Begusarai</option>
                        <option value="631">Behrampur</option>
                        <option value="208">Belgaum</option>
                        <option value="209">Bellary</option>
                        <option value="207">Bengaluru</option>
                        <option value="695">Betroj</option>
                        <option value="761">Bettiah</option>
                        <option value="241">Betul</option>
                        <option value="777">Bhabua</option>
                        <option value="688">Bhachau</option>
                        <option value="359">Bhadrak</option>
                        <option value="71">Bhagalpur</option>
                        <option value="291">Bhandara</option>
                        <option value="409">Bharatpur</option>
                        <option value="107">Bharuch</option>
                        <option value="891">Bhatapara</option>
                        <option value="108">Bhavnagar</option>
                        <option value="917">Bhawanigarh</option>
                        <option value="982">Bhawanipatna</option>
                        <option value="696">Bhilad</option>
                        <option value="574">Bhilai</option>
                        <option value="641">Bhilwara</option>
                        <option value="242">Bhind</option>
                        <option value="642">Bhiwadi</option>
                        <option value="129">Bhiwani</option>
                        <option value="919">Bhogpur</option>
                        <option value="756">Bhojpur</option>
                        <option value="243">Bhopal</option>
                        <option value="360">Bhubaneswar</option>
                        <option value="610">Bhuj</option>
                        <option value="1132">Bhupalpally</option>
                        <option value="876">Biaora</option>
                        <option value="210">Bidar</option>
                        <option value="1141">Bihar Sharif</option>
                        <option value="82">Bijapur</option>
                        <option value="211">Bijapur</option>
                        <option value="470">Bijnor</option>
                        <option value="410">Bikaner</option>
                        <option value="83">Bilaspur</option>
                        <option value="148">Bilaspur</option>
                        <option value="676">Bilimora</option>
                        <option value="878">Bina Etawa</option>
                        <option value="534">Birbhum</option>
                        <option value="320">Bishnupur</option>
                        <option value="182">Bokaro</option>
                        <option value="361">Bolangir</option>
                        <option value="743">Bomdila</option>
                        <option value="44">Bongaigaon</option>
                        <option value="929">Borsad</option>
                        <option value="362">Boudh</option>
                        <option value="893">Bramhapuri Wadsa</option>
                        <option value="163">Budgam</option>
                        <option value="899">Budhlada</option>
                        <option value="471">Bulandshahr</option>
                        <option value="292">Buldhana</option>
                        <option value="811">Bundi</option>
                        <option value="672">Burdwan</option>
                        <option value="244">Burhanpur</option>
                        <option value="895">Butibori</option>
                        <option value="776">Buxar</option>
                        <option value="45">Cachar</option>
                        <option value="1137">Chaibasa</option>
                        <option value="1126">Chakradharpur</option>
                        <option value="952">Chalisgaon</option>
                        <option value="212">Chamarajanagar</option>
                        <option value="149">Chamba</option>
                        <option value="526">Chamoli</option>
                        <option value="1106">Champa</option>
                        <option value="830">Champawat</option>
                        <option value="338">Champhai</option>
                        <option value="697">Chand Kheda</option>
                        <option value="472">Chandauli</option>
                        <option value="321">Chandel</option>
                        <option value="80">Chandigarh</option>
                        <option value="293">Chandrapur</option>
                        <option value="26">Changlang</option>
                        <option value="587">Chapra</option>
                        <option value="183">Chatra</option>
                        <option value="905">Cheeka</option>
                        <option value="987">Cheeka</option>
                        <option value="420">Chennai</option>
                        <option value="1136">Cherpulassery</option>
                        <option value="245">Chhatarpur</option>
                        <option value="246">Chhindwara</option>
                        <option value="647">Chidambaram</option>
                        <option value="691">Chikhli (guj.)</option>
                        <option value="213">Chikkaballapur</option>
                        <option value="214">Chikkamagaluru</option>
                        <option value="1118">Chilakaluripet</option>
                        <option value="589">Chinnamiram</option>
                        <option value="953">Chiplun</option>
                        <option value="1111">Chirala</option>
                        <option value="46">Chirang</option>
                        <option value="215">Chitradurga</option>
                        <option value="473">Chitrakoot</option>
                        <option value="1117">Chittaranjan</option>
                        <option value="3">Chittoor</option>
                        <option value="643">Chittorgarh</option>
                        <option value="912">Chomu</option>
                        <option value="954">Chopda</option>
                        <option value="698">Chotila</option>
                        <option value="322">Churachandpur</option>
                        <option value="812">Churu</option>
                        <option value="421">Coimbatore</option>
                        <option value="535">Cooch Behar</option>
                        <option value="422">Cuddalore</option>
                        <option value="993">Cumbum</option>
                        <option value="363">Cuttack</option>
                        <option value="109">Daang</option>
                        <option value="930">Dabhoi</option>
                        <option value="99">Dadra &amp; Nagar Haveli</option>
                        <option value="931">Dahanu Mh</option>
                        <option value="932">Dahegam</option>
                        <option value="1135">Dahej</option>
                        <option value="110">Dahod</option>
                        <option value="536">Dakshin Dinajpur</option>
                        <option value="216">Dakshina Kannada</option>
                        <option value="789">Daman</option>
                        <option value="100">Daman &amp; Diu</option>
                        <option value="632">Damanjodi</option>
                        <option value="247">Damoh</option>
                        <option value="84">Dantewada</option>
                        <option value="746">Daporijo</option>
                        <option value="72">Darbhanga</option>
                        <option value="537">Darjeeling</option>
                        <option value="47">Darrang</option>
                        <option value="248">Datia</option>
                        <option value="825">Dausa</option>
                        <option value="217">Davanagere</option>
                        <option value="689">Deesa</option>
                        <option value="527">Dehradun</option>
                        <option value="551">Delhi</option>
                        <option value="364">Deogarh</option>
                        <option value="184">Deoghar</option>
                        <option value="474">Deoria</option>
                        <option value="249">Dewas</option>
                        <option value="452">Dhalai</option>
                        <option value="889">Dhamnod</option>
                        <option value="85">Dhamtari</option>
                        <option value="185">Dhanbad</option>
                        <option value="690">Dhandhuka</option>
                        <option value="678">Dhangardha</option>
                        <option value="250">Dhar</option>
                        <option value="933">Dharampur</option>
                        <option value="1143">Dharapuram</option>
                        <option value="423">Dharmapuri</option>
                        <option value="994">Dharmavaram</option>
                        <option value="218">Dharwad</option>
                        <option value="48">Dhemaji</option>
                        <option value="365">Dhenkanal</option>
                        <option value="644">Dholpur</option>
                        <option value="677">Dhoraji</option>
                        <option value="49">Dhubri</option>
                        <option value="294">Dhule</option>
                        <option value="749">Dibang Valley</option>
                        <option value="50">Dibrugarh</option>
                        <option value="345">Dimapur</option>
                        <option value="424">Dindigul</option>
                        <option value="251">Dindori</option>
                        <option value="1112">Dinhata</option>
                        <option value="51">Dispur</option>
                        <option value="788">Diu</option>
                        <option value="164">Doda</option>
                        <option value="186">Dumka</option>
                        <option value="813">Dungarpur</option>
                        <option value="86">Durg</option>
                        <option value="658">Durgapur</option>
                        <option value="692">Dwarka</option>
                        <option value="329">East Garo Hills</option>
                        <option value="4">East Godavari</option>
                        <option value="27">East Kameng</option>
                        <option value="330">East Khasi Hills</option>
                        <option value="28">East Siang</option>
                        <option value="187">East Singhbhum</option>
                        <option value="901">Ellenabad</option>
                        <option value="564">Ernakulam</option>
                        <option value="425">Erode</option>
                        <option value="475">Etah</option>
                        <option value="476">Etawah</option>
                        <option value="477">Faizabad</option>
                        <option value="1113">Falakata</option>
                        <option value="556">Faridabad</option>
                        <option value="391">Faridkot</option>
                        <option value="478">Farrukhabad</option>
                        <option value="131">Fatehabad</option>
                        <option value="392">Fatehgarh Sahib</option>
                        <option value="479">Fatehpur</option>
                        <option value="634">Fazilka</option>
                        <option value="480">Firozabad</option>
                        <option value="393">Firozpur</option>
                        <option value="219">Gadag</option>
                        <option value="295">Gadchiroli</option>
                        <option value="740">Gadwal</option>
                        <option value="366">Gajapati</option>
                        <option value="165">Ganderbal</option>
                        <option value="679">Gandevi</option>
                        <option value="801">Gandhi Nagar</option>
                        <option value="659">Gandhidham</option>
                        <option value="111">Gandhinagar</option>
                        <option value="585">Ganganagar</option>
                        <option value="939">Gangavathi</option>
                        <option value="415">Gangtok</option>
                        <option value="367">Ganjam</option>
                        <option value="188">Garhwa</option>
                        <option value="481">Gautam Buddha Nagar</option>
                        <option value="604">Gaya</option>
                        <option value="416">Geyzing</option>
                        <option value="554">Ghaziabad</option>
                        <option value="483">Ghazipur</option>
                        <option value="995">Giddalur</option>
                        <option value="898">Gidderbaha</option>
                        <option value="189">Giridih</option>
                        <option value="673">Goa</option>
                        <option value="52">Goalpara</option>
                        <option value="190">Godda</option>
                        <option value="680">Godhra</option>
                        <option value="873">Gohana</option>
                        <option value="940">Gokak</option>
                        <option value="53">Golaghat</option>
                        <option value="484">Gonda</option>
                        <option value="934">Gondal</option>
                        <option value="296">Gondia</option>
                        <option value="766">Gopal Ganj</option>
                        <option value="654">Gorakhpur</option>
                        <option value="485">Gorkakhpur</option>
                        <option value="1127">Gudivada</option>
                        <option value="996">Gudur</option>
                        <option value="220">Gulbarga</option>
                        <option value="191">Gumla</option>
                        <option value="252">Guna</option>
                        <option value="997">Guntakal</option>
                        <option value="5">Guntur</option>
                        <option value="394">Gurdaspur</option>
                        <option value="555">Gurgaon</option>
                        <option value="906">Guru Har Sahai</option>
                        <option value="54">Guwahati</option>
                        <option value="253">Gwalior</option>
                        <option value="55">Hailakandi</option>
                        <option value="605">Hajipur</option>
                        <option value="864">Haldia</option>
                        <option value="606">Haldia (bihar)</option>
                        <option value="655">Haldwani</option>
                        <option value="611">Halol</option>
                        <option value="150">Hamirpur</option>
                        <option value="486">Hamirpur</option>
                        <option value="669">Hanumangarh</option>
                        <option value="835">Hapur</option>
                        <option value="254">Harda</option>
                        <option value="487">Hardoi</option>
                        <option value="528">Haridwar</option>
                        <option value="941">Harpanahalli</option>
                        <option value="221">Hassan</option>
                        <option value="222">Haveri</option>
                        <option value="192">Hazaribagh</option>
                        <option value="797">Himat Nagar</option>
                        <option value="612">Himatnagar</option>
                        <option value="1139">Hindupur</option>
                        <option value="894">Hinghanghat</option>
                        <option value="297">Hingoli</option>
                        <option value="133">Hisar</option>
                        <option value="538">Hooghly</option>
                        <option value="255">Hoshangabad</option>
                        <option value="395">Hoshiarpur</option>
                        <option value="661">Hospet</option>
                        <option value="648">Hosur</option>
                        <option value="539">Howrah</option>
                        <option value="573">Hubli</option>
                        <option value="6">Hyderabad</option>
                        <option value="628">Ichalkaranji</option>
                        <option value="681">Idar</option>
                        <option value="804">Idukki</option>
                        <option value="323">Imphal East</option>
                        <option value="324">Imphal West</option>
                        <option value="256">Indore</option>
                        <option value="1138">Iritty</option>
                        <option value="29">Itanagar</option>
                        <option value="257">Jabalpur</option>
                        <option value="808">Jagadalpur</option>
                        <option value="868">Jagadhri</option>
                        <option value="368">Jagatsinghpur</option>
                        <option value="588">Jagdalpur</option>
                        <option value="998">Jaggayyapeta</option>
                        <option value="763">Jahanabad</option>
                        <option value="331">Jaintia Hills</option>
                        <option value="411">Jaipur</option>
                        <option value="814">Jaisalmer</option>
                        <option value="369">Jajapur</option>
                        <option value="396">Jalandhar</option>
                        <option value="488">Jalaun</option>
                        <option value="1098">Jaleswar</option>
                        <option value="298">Jalgaon</option>
                        <option value="299">Jalna</option>
                        <option value="815">Jalore</option>
                        <option value="540">Jalpaiguri</option>
                        <option value="682">Jamkandorana</option>
                        <option value="166">Jammu</option>
                        <option value="112">Jamnagar</option>
                        <option value="955">Jamner</option>
                        <option value="567">Jamshedpur</option>
                        <option value="193">Jamtara</option>
                        <option value="778">Jamui</option>
                        <option value="88">Janigir - Champa</option>
                        <option value="785">Janjgir-champa</option>
                        <option value="87">Jashpur</option>
                        <option value="489">Jaunpur</option>
                        <option value="699">Jetpur</option>
                        <option value="983">Jeypore</option>
                        <option value="258">Jhabua</option>
                        <option value="134">Jhajjar</option>
                        <option value="816">Jhalawar</option>
                        <option value="935">Jhalod</option>
                        <option value="490">Jhansi</option>
                        <option value="370">Jharsuguda</option>
                        <option value="817">Jhunjhunu</option>
                        <option value="135">Jind</option>
                        <option value="412">Jodhpur</option>
                        <option value="56">Jorhat</option>
                        <option value="113">Junagadh</option>
                        <option value="491">Jyotiba Phule Nagar</option>
                        <option value="57">Kabri Anglong</option>
                        <option value="7">Kadapa</option>
                        <option value="613">Kadi</option>
                        <option value="999">Kadiri</option>
                        <option value="453">Kailashahar</option>
                        <option value="136">Kaithal</option>
                        <option value="590">Kakinada</option>
                        <option value="371">Kalahandi</option>
                        <option value="618">Kalka</option>
                        <option value="1000">Kallakurichi</option>
                        <option value="700">Kalol</option>
                        <option value="1140">Kalyani</option>
                        <option value="701">Kamrej</option>
                        <option value="58">Kamrup Metropolitian</option>
                        <option value="59">Kamrup Rural</option>
                        <option value="426">Kanchipuram</option>
                        <option value="372">Kandhamal</option>
                        <option value="702">Kandla</option>
                        <option value="151">Kangra</option>
                        <option value="91">Kanker</option>
                        <option value="703">Kankrej</option>
                        <option value="492">Kannauj</option>
                        <option value="624">Kannur</option>
                        <option value="557">Kanpur</option>
                        <option value="493">Kanpur Dehat</option>
                        <option value="494">Kanpur Nagar</option>
                        <option value="427">Kanyakumari</option>
                        <option value="704">Kapadwanj</option>
                        <option value="397">Kapurthala</option>
                        <option value="629">Karad</option>
                        <option value="1001">Karaikal</option>
                        <option value="827">Karauli</option>
                        <option value="754">Karbi Anglong</option>
                        <option value="167">Kargil</option>
                        <option value="755">Karim Ganj</option>
                        <option value="60">Karimganj</option>
                        <option value="8">Karimnagar</option>
                        <option value="956">Karjat</option>
                        <option value="1108">Karkala</option>
                        <option value="137">Karnal</option>
                        <option value="866">Kartarpur</option>
                        <option value="428">Karur</option>
                        <option value="942">Karwar</option>
                        <option value="806">Kasaragod</option>
                        <option value="671">Kashipur</option>
                        <option value="1002">Kasibugga</option>
                        <option value="168">Kathua</option>
                        <option value="774">Katihar</option>
                        <option value="259">Katni</option>
                        <option value="1107">Katwa</option>
                        <option value="495">Kaushambi</option>
                        <option value="1003">Kavali</option>
                        <option value="92">Kawardha</option>
                        <option value="373">Kendrapara</option>
                        <option value="374">Kendujhar</option>
                        <option value="633">Keonjhar</option>
                        <option value="705">Keshod</option>
                        <option value="771">Khagaria</option>
                        <option value="706">Khambhat</option>
                        <option value="887">Khamgaon</option>
                        <option value="9">Khammam</option>
                        <option value="260">Khandwa</option>
                        <option value="635">Khanna</option>
                        <option value="707">Khanpur</option>
                        <option value="584">Kharagpur</option>
                        <option value="875">Kharar</option>
                        <option value="261">Khargone</option>
                        <option value="114">Kheda</option>
                        <option value="751">Khonsa</option>
                        <option value="957">Khopoli</option>
                        <option value="194">Khunti</option>
                        <option value="375">Khurdha</option>
                        <option value="152">Kinnaur</option>
                        <option value="346">Kiphire</option>
                        <option value="772">Kishanganj</option>
                        <option value="908">Kishangarh</option>
                        <option value="169">Kishtwar</option>
                        <option value="234">Kochi</option>
                        <option value="591">Kodad</option>
                        <option value="223">Kodagu</option>
                        <option value="195">Koderma</option>
                        <option value="347">Kohima</option>
                        <option value="61">Kokrajhar</option>
                        <option value="224">Kolar</option>
                        <option value="339">Kolasib</option>
                        <option value="300">Kolhapur</option>
                        <option value="541">Kolkata</option>
                        <option value="575">Kollam</option>
                        <option value="958">Kopergaon</option>
                        <option value="225">Koppal</option>
                        <option value="376">Koraput</option>
                        <option value="89">Korba</option>
                        <option value="90">Koriya</option>
                        <option value="73">Kosi</option>
                        <option value="413">Kota</option>
                        <option value="1097">Kothagudem</option>
                        <option value="913">Kotputli</option>
                        <option value="1145">Kottakkal</option>
                        <option value="1124">Kottarakara</option>
                        <option value="560">Kottayam</option>
                        <option value="1004">Kovilpatti</option>
                        <option value="569">Kozhikode</option>
                        <option value="10">Krishna</option>
                        <option value="429">Krishnagiri</option>
                        <option value="170">Kulgam</option>
                        <option value="153">Kullu</option>
                        <option value="649">Kumbakonam</option>
                        <option value="943">Kundapura</option>
                        <option value="874">Kundli</option>
                        <option value="171">Kupwara</option>
                        <option value="11">Kurnool</option>
                        <option value="138">Kurukshetra</option>
                        <option value="30">Kurung Kumey</option>
                        <option value="944">Kushalnagar</option>
                        <option value="496">Kushinagar</option>
                        <option value="115">Kutch</option>
                        <option value="154">Lahul And Spiti</option>
                        <option value="62">Lakhimpur</option>
                        <option value="497">Lakhimpur Kheri</option>
                        <option value="783">Lakhisarai</option>
                        <option value="236">Lakshadweep</option>
                        <option value="498">Lalitpur</option>
                        <option value="196">Latehar</option>
                        <option value="301">Latur</option>
                        <option value="340">Lawngtlai</option>
                        <option value="172">Leh</option>
                        <option value="921">Lehargaga</option>
                        <option value="197">Lohardaga</option>
                        <option value="31">Lohit</option>
                        <option value="959">Lonavala</option>
                        <option value="348">Longleng</option>
                        <option value="32">Lower Dibang Valley</option>
                        <option value="33">Lower Subansiri</option>
                        <option value="499">Lucknow</option>
                        <option value="398">Ludhiana</option>
                        <option value="708">Lunawada</option>
                        <option value="341">Lunglei</option>
                        <option value="1128">Machilipatnam</option>
                        <option value="926">Machiwara</option>
                        <option value="1109">Madanapalle</option>
                        <option value="775">Madhepura</option>
                        <option value="769">Madhubani</option>
                        <option value="430">Madurai</option>
                        <option value="74">Magadh</option>
                        <option value="741">Mahabub Nagar</option>
                        <option value="500">Mahamaya Nagar</option>
                        <option value="501">Maharajganj</option>
                        <option value="93">Mahasamund</option>
                        <option value="12">Mahbubnagar</option>
                        <option value="139">Mahendragarh</option>
                        <option value="502">Mahoba</option>
                        <option value="709">Mahuva</option>
                        <option value="503">Mainpuri</option>
                        <option value="233">Malabar</option>
                        <option value="660">Malappuram</option>
                        <option value="1142">Malbazar</option>
                        <option value="542">Malda</option>
                        <option value="665">Malegaon</option>
                        <option value="1121">Malerkotla</option>
                        <option value="377">Malkangiri</option>
                        <option value="885">Malkapur</option>
                        <option value="668">Malout</option>
                        <option value="342">Mamit</option>
                        <option value="592">Mancherial</option>
                        <option value="1005">Mandapeta</option>
                        <option value="155">Mandi</option>
                        <option value="904">Mandi Dabwali</option>
                        <option value="1134">Mandideep</option>
                        <option value="262">Mandla</option>
                        <option value="263">Mandsaur</option>
                        <option value="710">Mandvi</option>
                        <option value="226">Mandya</option>
                        <option value="879">Manendragarh</option>
                        <option value="623">Mangalore</option>
                        <option value="417">Mangan</option>
                        <option value="399">Mansa</option>
                        <option value="790">Margao</option>
                        <option value="102">Margoa</option>
                        <option value="63">Marigaon</option>
                        <option value="1006">Markapur</option>
                        <option value="504">Mathura</option>
                        <option value="505">Mau</option>
                        <option value="1007">Mayiladuthurai</option>
                        <option value="378">Mayurbhanj</option>
                        <option value="13">Medak</option>
                        <option value="506">Meerut</option>
                        <option value="116">Mehsana</option>
                        <option value="1008">Mettupalayam</option>
                        <option value="140">Mewat</option>
                        <option value="543">Midnapore East</option>
                        <option value="544">Midnapore West</option>
                        <option value="1123">Miryalaguda</option>
                        <option value="507">Mirzapur</option>
                        <option value="711">Modasa</option>
                        <option value="400">Moga</option>
                        <option value="401">Mohali</option>
                        <option value="349">Mokokchung</option>
                        <option value="350">Mon</option>
                        <option value="758">Monghyr</option>
                        <option value="508">Moradabad</option>
                        <option value="936">Morbi</option>
                        <option value="264">Morena</option>
                        <option value="614">Morvi</option>
                        <option value="757">Motihari</option>
                        <option value="402">Muktsar</option>
                        <option value="302">Mumbai</option>
                        <option value="615">Mundra</option>
                        <option value="75">Munger</option>
                        <option value="545">Murshidabad</option>
                        <option value="509">Muzaffarnagar</option>
                        <option value="582">Muzaffarpur</option>
                        <option value="227">Mysore</option>
                        <option value="379">Nabarangpur</option>
                        <option value="636">Nabha</option>
                        <option value="546">Nadia</option>
                        <option value="577">Nadiad</option>
                        <option value="64">Nagaon</option>
                        <option value="431">Nagapattinam</option>
                        <option value="818">Nagaur</option>
                        <option value="650">Nagercoil</option>
                        <option value="303">Nagpur</option>
                        <option value="739">Nainital</option>
                        <option value="712">Nakhtrana</option>
                        <option value="867">Nakodar</option>
                        <option value="760">Nalanda</option>
                        <option value="65">Nalbari</option>
                        <option value="14">Nalgonda</option>
                        <option value="713">Naliya</option>
                        <option value="432">Namakkal</option>
                        <option value="418">Namchi</option>
                        <option value="714">Nanapondha</option>
                        <option value="304">Nanded</option>
                        <option value="305">Nandurbar</option>
                        <option value="715">Naranpar</option>
                        <option value="890">Narasinghpur</option>
                        <option value="960">Narayangaon</option>
                        <option value="94">Narayanpur</option>
                        <option value="117">Narmada</option>
                        <option value="1104">Narnaul</option>
                        <option value="716">Naroda</option>
                        <option value="1009">Narsapur</option>
                        <option value="265">Narsinghpur</option>
                        <option value="306">Nashik</option>
                        <option value="666">Navi Mumbai</option>
                        <option value="118">Navsari</option>
                        <option value="765">Nawadah</option>
                        <option value="403">Nawanshahr</option>
                        <option value="380">Nayagarh</option>
                        <option value="910">Neemrana</option>
                        <option value="266">Neemuch</option>
                        <option value="15">Nellore</option>
                        <option value="1010">Neyveli</option>
                        <option value="433">Nilgiris</option>
                        <option value="945">Nipani</option>
                        <option value="16">Nizamabad</option>
                        <option value="553">Noida</option>
                        <option value="547">North 24 Parganas</option>
                        <option value="66">North Cachar Hills</option>
                        <option value="381">Nuapada</option>
                        <option value="1011">Nuziveedu</option>
                        <option value="593">Ongole</option>
                        <option value="307">Osmanabad</option>
                        <option value="961">Pachora</option>
                        <option value="870">Padra</option>
                        <option value="198">Pakur</option>
                        <option value="625">Palakkad</option>
                        <option value="1012">Palakollu</option>
                        <option value="199">Palamu</option>
                        <option value="1013">Palani</option>
                        <option value="717">Palanpur</option>
                        <option value="819">Pali</option>
                        <option value="1014">Palmaner</option>
                        <option value="619">Palwal</option>
                        <option value="101">Panaji</option>
                        <option value="800">Panch Mahals</option>
                        <option value="141">Panchkula</option>
                        <option value="119">Panchmahal</option>
                        <option value="962">Pandharpur</option>
                        <option value="142">Panipat</option>
                        <option value="267">Panna</option>
                        <option value="34">Papum Pare</option>
                        <option value="984">Paradip</option>
                        <option value="308">Parbhani</option>
                        <option value="1015">Parvathipuram</option>
                        <option value="748">Pasighat</option>
                        <option value="120">Patan</option>
                        <option value="626">Pathanamthitta</option>
                        <option value="637">Pathankot</option>
                        <option value="404">Patiala</option>
                        <option value="76">Patna</option>
                        <option value="909">Patodi</option>
                        <option value="529">Pauri Garhwal</option>
                        <option value="718">Pavijetpur</option>
                        <option value="963">Pen</option>
                        <option value="620">Peowa</option>
                        <option value="434">Perambalur</option>
                        <option value="351">Peren</option>
                        <option value="583">Phagwara</option>
                        <option value="964">Phaltan</option>
                        <option value="352">Phek</option>
                        <option value="918">Phillaur</option>
                        <option value="1096">Phusro</option>
                        <option value="1016">Piduguralla</option>
                        <option value="1017">Pileru</option>
                        <option value="511">Pilibhit</option>
                        <option value="965">Pimpalgaon</option>
                        <option value="869">Pinjore</option>
                        <option value="607">Piparia</option>
                        <option value="871">Pithampur</option>
                        <option value="831">Pithoragarh</option>
                        <option value="651">Pollachi</option>
                        <option value="792">Ponda</option>
                        <option value="387">Pondicherry</option>
                        <option value="622">Pontashaib</option>
                        <option value="173">Poonch</option>
                        <option value="121">Porbandar</option>
                        <option value="17">Prakasam</option>
                        <option value="512">Pratapgarh</option>
                        <option value="594">Proddattur</option>
                        <option value="435">Pudukkottai</option>
                        <option value="174">Pulwama</option>
                        <option value="902">Pundri</option>
                        <option value="309">Pune</option>
                        <option value="382">Puri</option>
                        <option value="77">Purnia</option>
                        <option value="548">Purulia</option>
                        <option value="896">Pusad</option>
                        <option value="980">Pusad</option>
                        <option value="946">Puttur</option>
                        <option value="719">Radhanpur</option>
                        <option value="513">Rae Bareli</option>
                        <option value="1114">Raghunathpur</option>
                        <option value="966">Rahuri</option>
                        <option value="228">Raichur</option>
                        <option value="310">Raigad</option>
                        <option value="1110">Raiganj</option>
                        <option value="95">Raigarh</option>
                        <option value="927">Raikot</option>
                        <option value="1018">Railway Koduru</option>
                        <option value="97">Raipur</option>
                        <option value="1131">Rairangpur</option>
                        <option value="268">Raisen</option>
                        <option value="570">Rajahmundry</option>
                        <option value="1019">Rajam</option>
                        <option value="1020">Rajapalayam</option>
                        <option value="1103">Rajgangapur</option>
                        <option value="269">Rajgarh</option>
                        <option value="967">Rajgurunagar</option>
                        <option value="122">Rajkot</option>
                        <option value="96">Rajnandgaon</option>
                        <option value="175">Rajouri</option>
                        <option value="720">Rajpipla</option>
                        <option value="638">Rajpura</option>
                        <option value="826">Rajsamand</option>
                        <option value="1144">Ramagundam</option>
                        <option value="229">Ramanagara</option>
                        <option value="436">Ramanathapuram</option>
                        <option value="176">Ramban</option>
                        <option value="200">Ramgarh</option>
                        <option value="514">Rampur</option>
                        <option value="1115">Ranaghat</option>
                        <option value="721">Ranavav Porbandar</option>
                        <option value="201">Ranchi</option>
                        <option value="18">Rangareddy</option>
                        <option value="1133">Raniganj</option>
                        <option value="722">Rapar</option>
                        <option value="270">Ratlam</option>
                        <option value="311">Ratnagiri</option>
                        <option value="1021">Rayachoti</option>
                        <option value="383">Rayagada</option>
                        <option value="177">Reasi</option>
                        <option value="1022">Repalle</option>
                        <option value="271">Rewa</option>
                        <option value="143">Rewari</option>
                        <option value="332">Ri-bhoi</option>
                        <option value="833">Rishikesh</option>
                        <option value="968">Roha</option>
                        <option value="144">Rohtak</option>
                        <option value="762">Rohtas</option>
                        <option value="753">Roing</option>
                        <option value="656">Roorkee</option>
                        <option value="639">Ropar</option>
                        <option value="561">Rourkela</option>
                        <option value="530">Rudraprayag</option>
                        <option value="657">Rudrapur</option>
                        <option value="405">Rupnagar</option>
                        <option value="123">Sabarkantha</option>
                        <option value="937">Sachin</option>
                        <option value="272">Sagar</option>
                        <option value="515">Saharanpur</option>
                        <option value="759">Saharsa</option>
                        <option value="202">Sahebganj</option>
                        <option value="343">Saiha</option>
                        <option value="437">Salem</option>
                        <option value="985">Salepur</option>
                        <option value="1023">Samalkota</option>
                        <option value="770">Samastipur</option>
                        <option value="178">Samba</option>
                        <option value="384">Sambalpur</option>
                        <option value="723">Sanand</option>
                        <option value="595">Sanga Reddy</option>
                        <option value="630">Sangamner</option>
                        <option value="312">Sangli</option>
                        <option value="406">Sangrur</option>
                        <option value="724">Sanjan</option>
                        <option value="516">Sant Kabir Nagar</option>
                        <option value="517">Sant Ravidas Nagar</option>
                        <option value="725">Santrampura</option>
                        <option value="78">Saran</option>
                        <option value="1125">Sasaram</option>
                        <option value="313">Satara</option>
                        <option value="273">Satna</option>
                        <option value="822">Sawai Madhopur</option>
                        <option value="969">Sawantwadi</option>
                        <option value="726">Sayan</option>
                        <option value="571">Secunderabad</option>
                        <option value="947">Sedam</option>
                        <option value="274">Sehore</option>
                        <option value="986">Semiliguda</option>
                        <option value="325">Senapati</option>
                        <option value="275">Seoni</option>
                        <option value="744">Seppa</option>
                        <option value="203">Seraikela Kharsawan</option>
                        <option value="344">Serchhip</option>
                        <option value="970">Shahada</option>
                        <option value="948">Shahapur</option>
                        <option value="276">Shahdol</option>
                        <option value="518">Shahjahanpur</option>
                        <option value="924">Shahkot</option>
                        <option value="645">Shahpura</option>
                        <option value="277">Shajapur</option>
                        <option value="781">Sheikhpura</option>
                        <option value="278">Sheopur</option>
                        <option value="971">Shikrapur</option>
                        <option value="333">Shilong</option>
                        <option value="156">Shimla</option>
                        <option value="230">Shimoga</option>
                        <option value="972">Shirpur</option>
                        <option value="973">Shirur</option>
                        <option value="974">Shirval</option>
                        <option value="279">Shivpuri</option>
                        <option value="179">Shopian</option>
                        <option value="519">Shravasti</option>
                        <option value="975">Shrigonda Kashti</option>
                        <option value="976">Shrirampur</option>
                        <option value="67">Sibsagar</option>
                        <option value="520">Siddharthnagar</option>
                        <option value="596">Siddipet</option>
                        <option value="280">Sidhi</option>
                        <option value="820">Sikar</option>
                        <option value="603">Silchar</option>
                        <option value="572">Siliguri</option>
                        <option value="727">Silvasa</option>
                        <option value="608">Silvassa</option>
                        <option value="728">Silvassa</option>
                        <option value="204">Simdega</option>
                        <option value="314">Sindhudurg</option>
                        <option value="157">Sirmaur</option>
                        <option value="821">Sirohi</option>
                        <option value="145">Sirsa</option>
                        <option value="578">Siruguppa</option>
                        <option value="768">Sitamarhi</option>
                        <option value="521">Sitapur</option>
                        <option value="438">Sivagangai</option>
                        <option value="1024">Sivakasi</option>
                        <option value="767">Siwan</option>
                        <option value="158">Solan</option>
                        <option value="315">Solapur</option>
                        <option value="729">Somnath Junagadha</option>
                        <option value="522">Sonbhadra</option>
                        <option value="385">Sonepur</option>
                        <option value="146">Sonipat</option>
                        <option value="68">Sonitpur</option>
                        <option value="1100">Soro</option>
                        <option value="549">South 24 Parganas</option>
                        <option value="334">South Garo Hills</option>
                        <option value="791">South Goa</option>
                        <option value="670">Sri Ganganagar</option>
                        <option value="19">Srikakulam</option>
                        <option value="1105">Srikalahasti</option>
                        <option value="180">Srinagar</option>
                        <option value="652">Sriperumbudur</option>
                        <option value="907">Sujangarh</option>
                        <option value="1025">Sullurpeta</option>
                        <option value="523">Sultanpur</option>
                        <option value="386">Sundargarh</option>
                        <option value="779">Supaul</option>
                        <option value="124">Surat</option>
                        <option value="911">Suratgarh</option>
                        <option value="730">Surendernagar</option>
                        <option value="798">Surendra Nagar</option>
                        <option value="125">Surendranagar</option>
                        <option value="98">Surguja</option>
                        <option value="597">Suryapet</option>
                        <option value="598">Tadipatri</option>
                        <option value="900">Talawandi Saboo</option>
                        <option value="1102">Talcher</option>
                        <option value="977">Talegaon Dabhade</option>
                        <option value="326">Tamenglong</option>
                        <option value="599">Tandur</option>
                        <option value="600">Tanuku</option>
                        <option value="1122">Tarakeshwar</option>
                        <option value="903">Taraori</option>
                        <option value="407">Tarn Taran</option>
                        <option value="35">Tawang</option>
                        <option value="531">Tehri Garhwal And Uttarkashi</option>
                        <option value="1120">Tenali</option>
                        <option value="1026">Tenkasi</option>
                        <option value="602">Tezpur</option>
                        <option value="750">Tezu</option>
                        <option value="316">Thane</option>
                        <option value="439">Thanjavur</option>
                        <option value="440">Theni</option>
                        <option value="581">Thiruvalla</option>
                        <option value="562">Thiruvananthapuram</option>
                        <option value="441">Thoothukudi</option>
                        <option value="327">Thoubal</option>
                        <option value="565">Thrissur</option>
                        <option value="281">Tikamgarh</option>
                        <option value="69">Tinsukia</option>
                        <option value="36">Tirap</option>
                        <option value="79">Tirhut</option>
                        <option value="1027">Tiruchendur</option>
                        <option value="1028">Tiruchengode</option>
                        <option value="442">Tiruchirapalli</option>
                        <option value="443">Tirunelveli</option>
                        <option value="601">Tirupati</option>
                        <option value="1029">Tirupattur</option>
                        <option value="653">Tiruppur</option>
                        <option value="627">Tirur</option>
                        <option value="444">Tiruvallur</option>
                        <option value="445">Tiruvannamalai</option>
                        <option value="446">Tiruvarur</option>
                        <option value="823">Tonk</option>
                        <option value="235">Travancore</option>
                        <option value="353">Tuensang</option>
                        <option value="231">Tumkur</option>
                        <option value="1030">Tuni</option>
                        <option value="414">Udaipur</option>
                        <option value="454">Udaipur (tripura)</option>
                        <option value="70">Udalguri</option>
                        <option value="882">Udgir</option>
                        <option value="1031">Udhagamandalam</option>
                        <option value="832">Udham Singh Nagar</option>
                        <option value="181">Udhampur</option>
                        <option value="1032">Udumalpet</option>
                        <option value="232">Udupi And Uttara Kannada</option>
                        <option value="731">Udwada</option>
                        <option value="282">Ujjain</option>
                        <option value="328">Ukhrul</option>
                        <option value="283">Umaria</option>
                        <option value="732">Umbergaon</option>
                        <option value="159">Una</option>
                        <option value="1074">Unjha</option>
                        <option value="524">Unnao</option>
                        <option value="37">Upper Dibang Valley</option>
                        <option value="38">Upper Siang</option>
                        <option value="39">Upper Subansiri</option>
                        <option value="550">Uttar Dinajpur</option>
                        <option value="126">Vadodara</option>
                        <option value="733">Vallabh Vidyanagar</option>
                        <option value="734">Valod</option>
                        <option value="127">Valsad</option>
                        <option value="579">Vapi</option>
                        <option value="525">Varanasi</option>
                        <option value="447">Vellore</option>
                        <option value="616">Veraval</option>
                        <option value="284">Vidisha</option>
                        <option value="735">Vijapur</option>
                        <option value="558">Vijayawada</option>
                        <option value="448">Viluppuram</option>
                        <option value="736">Virpur</option>
                        <option value="1033">Virudhachalam</option>
                        <option value="449">Virudhunagar</option>
                        <option value="20">Visakhapatnam</option>
                        <option value="737">Visnagar</option>
                        <option value="21">Vizianagaram</option>
                        <option value="802">Vyara</option>
                        <option value="738">Waghodia</option>
                        <option value="892">Wani</option>
                        <option value="978">Warananagar</option>
                        <option value="22">Warangal</option>
                        <option value="317">Wardha</option>
                        <option value="884">Warud</option>
                        <option value="318">Washim</option>
                        <option value="805">Wayanad</option>
                        <option value="335">West Garo Hills</option>
                        <option value="23">West Godavari</option>
                        <option value="40">West Kameng</option>
                        <option value="336">West Khasi Hills</option>
                        <option value="41">West Siang</option>
                        <option value="205">West Singhbhum</option>
                        <option value="354">Wokha</option>
                        <option value="803">Yadgir</option>
                        <option value="147">Yamuna Nagar</option>
                        <option value="319">Yavatmal</option>
                        <option value="1034">Yemmiganur</option>
                        <option value="752">Yingkiong</option>
                        <option value="865">Zirakpur</option>
                        <option value="745">Ziro</option>
                        <option value="355">Zunheboto</option>
                    </select>

                </div>
                <div class="col-lg-4">
                    <div class="select-box">
                        <label class="float-left">Salary Received In</label>
                        <select name="salary_mode" id="salary_mode" class="form-control">
                            <option value="">Please select</option>
                            <option class="cheque_cash_option show" value="9999">Cheque</option>
                            <option class="cheque_cash_option show" value="9998">Cash</option>
                            <option value="2">HDFC</option>
                            <option value="3">SBI</option>
                            <option value="6">ICICI</option>
                            <option value="27">AXIS</option>
                            <option value="17">KOTAK</option>
                            <option value="28">Standard Chartered Bank</option>
                            <option value="357">AU Small Finance Bank</option>
                            <option value="39">Abhyuday Co-op Bank Ltd</option>
                            <option value="7">Allahabad Bank</option>
                            <option value="26">Andhra Bank</option>
                            <option value="5">Bank of Baroda</option>
                            <option value="8">Bank of India</option>
                            <option value="18">Bank of Maharasthra</option>
                            <option value="29">Bank of Rajasthan</option>
                            <option value="109">Bassein Catholic Cooperative Bank Limited</option>
                            <option value="31">Canara Bank</option>
                            <option value="358">Capital Small Finance Bank</option>
                            <option value="47">Catholic Syrian Bank</option>
                            <option value="9">Central Bank of India</option>
                            <option value="33">Citibank</option>
                            <option value="227">City Union Bank</option>
                            <option value="34">Corporation Bank</option>
                            <option value="243">DBS Bank</option>
                            <option value="118">DCB</option>
                            <option value="11">Dena Bank</option>
                            <option value="35">Deutsche Bank</option>
                            <option value="23">Dhanalakshmi Bank Ltd</option>
                            <option value="122">Dombivli Nagari Sahakari Bank Limited</option>
                            <option value="32">Federal Bank</option>
                            <option value="1">HSBC Bank</option>
                            <option value="40">IDBI Bank</option>
                            <option value="247">IDFC First Bank</option>
                            <option value="36">ING Vysya</option>
                            <option value="51">Indian Bank</option>
                            <option value="37">Indian Overseas Bank</option>
                            <option value="67">IndusInd Bank</option>
                            <option value="21">J&amp;K Bank</option>
                            <option value="129">Janaseva Sahakari Bank Limited</option>
                            <option value="134">Kalyan Janata Sahakari Bank</option>
                            <option value="48">Karnataka Bank</option>
                            <option value="41">Karur Vysya Bank</option>
                            <option value="24">Lakshmi Vilas bank</option>
                            <option value="143">Nagpur Nagarik Sahakari Bank Limited</option>
                            <option value="146">Nutan Nagarik Sahakari Bank Limited</option>
                            <option value="42">Oriental Bank of Commerce</option>
                            <option value="148">Prathama Bank</option>
                            <option value="149">Prime Cooperative Bank Limited</option>
                            <option value="84">Punjab &amp; Maharashtra Co-op Bank Ltd</option>
                            <option value="19">Punjab &amp; Sind bank</option>
                            <option value="43">Punjab National Bank</option>
                            <option value="66">RBL Bank Ltd</option>
                            <option value="50">Saraswat Bank</option>
                            <option value="49">South Indian Bank</option>
                            <option value="15">State Bank of Bikaner &amp; Jaipur</option>
                            <option value="13">State Bank of Hyderabad</option>
                            <option value="38">State Bank of Indore</option>
                            <option value="14">State Bank of Mysore</option>
                            <option value="44">State Bank of Patiala</option>
                            <option value="45">State Bank of Travancore</option>
                            <option value="20">Syndicate Bank</option>
                            <option value="22">Tamilnad Mercantile Bank Ltd</option>
                            <option value="175">The Kangra Cooperative Bank Limited</option>
                            <option value="178">The Kurmanchal Nagar Sahakari Bank Limited</option>
                            <option value="179">The Mehsana Urban Cooperative Bank</option>
                            <option value="89">The Nainital Bank Ltd</option>
                            <option value="192">The Vishweshwar Sahakari Bank Limited</option>
                            <option value="16">UCO Bank</option>
                            <option value="10">Union Bank of India</option>
                            <option value="46">United Bank of India</option>
                            <option value="12">Vijaya Bank</option>
                            <option value="65">Yes Bank</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <label class="float-left">Your Company Name</label>
                    <input type="text" name="residence" placeholder="Your Company Name" />
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
                        <input type="text" name="emi" placeholder="Enter Your Full Name" />
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
                    <select name="employment_type_id" class="form-control">
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
                        <select name="employment_type_id" class="form-control">
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
                    <select name="employment_type_id" class="form-control">
                        <option value="">Please select</option>
                        <option value=""></option>
                        <option value="1">Owned by self/spouse</option>
                        <option value="2">Owned by parents/sibling</option>
                        <option value="9">Rented- With family</option>
                        <option value="10">Rented- With friends</option>
                        <option value="11">Rented- Staying alone</option>
                        <option value="5">Paying guest</option>
                        <option value="12">Hostel</option>
                        <option value="4">Company provided</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <label class="float-left">What is the purpose of your Loan</label>
                    <select name="employment_type_id" class="form-control">
                        <option value="">Please select</option>
                        <option value="8">Purchase of household/electronic goods</option>
                        <option value="5">Household expenses</option>
                        <option value="3">Loan/Card Repayment</option>
                        <option value="6">Education/related expenses</option>
                        <option value="4">Home buying/renovation</option>
                        <option value="2">Urgent Medical Expenses</option>
                        <option value="7">Financial security</option>
                        <option value="1">Travel/Relocation Related</option>
                        <option value="9">Others</option>
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
                    <input type="radio" name="fav_language" value="indusind bank">
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
                    <input type="radio" name="fav_language" value="indusind bank">
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
                    <input type="radio" name="fav_language" checked value="indusind bank">
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
                    <input type="radio" name="fav_language" value="indusind bank">
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
                    <input type="radio" name="fav_language" value="indusind bank">
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
                    <input type="radio" name="fav_language" value="indusind bank">
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
                    <input type="radio" name="fav_language" value="indusind bank">
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
                    <input type="radio" name="fav_language" value="indusind bank">
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
                    <input type="radio" name="fav_language" value="indusind bank">
                </div>
            </div>
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="submit" name="submit" class="submit action-button" value="Submit" />
        </fieldset>
    </form>
    </sction>
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
            //hide the current fieldset with style
            // current_fs.animate({opacity: 0}, {
            // 	step: function(now, mx) {
            // 		//as the opacity of current_fs reduces to 0 - stored in "now"
            // 		//1. scale current_fs down to 80%
            // 		scale = 1 - (1 - now) * 0.2;
            // 		//2. bring next_fs from the right(50%)
            // 		left = (now * 50)+"%";
            // 		//3. increase opacity of next_fs to 1 as it moves in
            // 		opacity = 1 - now;
            // 		current_fs.css({
            //     'transform': 'scale('+scale+')',
            //     'position': 'absolute'
            //   });
            // 		next_fs.css({'left': left, 'opacity': opacity});
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

        $(".submit").click(function () {
            return false;
        })
    </script>