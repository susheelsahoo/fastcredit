<?php include('layout/header.php');?>

<div class="page-title-area item-bg-1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Apply now</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Apply now</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="apply-area ptb-100">
    <div class="container">
        <div class="apply-title">
            <h3>Loan Application</h3>
        </div>
        <form class="apply-form">
        <div class="row">
            <div class="col-lg-6">                
                <div class="form-group">
                    <label>Firstname*</label>
                    <input type="text" name="firstname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Email Address*</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Date of Birth*</label>
                    <input type="date" name="dob" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Address*</label>
                    <input type="text" name="address" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Desired Loan Amount*</label>
                    <input type="number" name="ammount" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Company Address</label>
                    <input type="text" name="c_address" class="form-control">
                </div>
                <div class="form-group">
                    <label>Purpose of Loan*</label>
                    <input type="text" name="purpose_of_loan" class="form-control" required>
                </div>
                
            </div>
            <div class="col-lg-6">                
                <div class="form-group">
                    <label>Lastname*</label>
                    <input type="text" name="lastname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Phone Number*</label>
                    <input type="number" name="phone_number" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <div class="select-box">
                        <select name="gender" class="form-control">
                            <option value="5">Male</option>
                            <option value="1">Female</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label>Annual Income*</label>
                    <input type="number" name="annual_income" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" name="company_name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Banks*</label>                        
                        <select name="bankname" class="form-control" required>
                            <option selected="selected" value="0">--Select --</option>
                            <option value="STATE BANK OF INDIA">STATE BANK OF INDIA</option>
                            <option value="BANK OF BARODA">BANK OF BARODA</option>                                
                            <option value="PUNJAB NATIONAL BANK">PUNJAB NATIONAL BANK</option>
                            <option value="HDFC BANK LTD">HDFC BANK LTD</option>
                            <option value="ICICI BANK LTD">ICICI BANK LTD</option>
                            <option value="INDUSIND BANK LTD">INDUSIND BANK LTD</option>
                            <option value="KOTAK MAHINDRA BANK">KOTAK MAHINDRA BANK</option>
                            <option value="YES BANK LTD">YES BANK LTD</option>                                
                        </select>                        
                </div>
                <div class="form-group">
                    <label>Choose here</label>
                    <div class="select-box">
                        <select class="form-control">                                
                            <option value="Business Loan">Business Loan</option>
                            <option value="House Loan">House Loan</option>
                            <option value="Personal Loan">Personal Loan</option>
                            <option value="Education Loan">Education Loan</option>
                            <option value="Car Loan">Car Loan</option>
                        </select>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="apply-btn">
            <button type="submit" class="default-btn">
                Apply now
                <span></span>
            </button>
        </div>
        </form>
    </div>
</section>


<?php include('layout/footer.php');?>