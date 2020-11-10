<?php  $currentPage = 'index';
       include_once('./header.php'); ?>

        <div class="wrapper">
            <div class="page-content">
                <div class="dashboard">
                    <div class="page-title big">
                        Hi
                        <span class="nickname">Umang</span>
                    </div>
                    <div class="margins-stats stats-block">
                        <div class="data-box">
                            <div class="secondary-title">
                                <div class="name">FD</div>
                                <div class="value">
                                    250.91
                                </div>
                            </div>
                            <div class="secondary-title">
                                <div class="name">commodity</div> 
                                <div class="value">
                                    250.91
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="stats-block holdings">
                        <div class="holdings-block portfolio-block">
                            <div class="holding-title">
                                <div class="secondary-title">
                                    <span class="icon icon-briefcase"></span>
                                    Holdings 
                                    <span>(2)</span>
                                </div>
                                <a href="#">
                                    <div class="best-rates">
                                        <span>Current Best Rates</span>
                                        <span class="icon icon-external-link"></span>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="data-box">
                                <div class="secondary-stats">
                                    <div class="block">
                                        <span class="label">ICICI</span> 
                                        <span class="value">2</span>
                                    </div> 
                                    <div class="block">
                                        <span class="label">SBI</span> 
                                        <span class="value">1</span>
                                    </div>
                                    <div class="block">
                                        <span class="label">RBL</span> 
                                        <span class="value">1</span>
                                    </div>
                                </div>
                                <div class="secondary-stats">
                                    <div class="block">
                                        <span class="label">Current value</span> 
                                        <span class="value">7.49k</span>
                                    </div> 
                                    <div class="block">
                                        <span class="label">Investment</span> 
                                        <span class="value">7.51k</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="stats-block no-border">
                        <div class="add-button" data-toggle="modal" data-target="#add_fund_modal">
                            <span class="icon icon-plus"></span>
                            <span>Add FD</span>
                        </div>
                        <table id="table_id">
                            <thead>
                                <tr>
                                    <th>Banks</th>
                                    <th>Account</th>
                                    <th>Investment</th>
                                    <th>Maturity</th>
                                    <th>Maturity Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ICICI</td>
                                    <td>MI525846</td>
                                    <td>100000</td>
                                    <td>150000</td>
                                    <td>03/10/2025</td>
                                    <td><button>View</button></td>
                                </tr>
                                <tr>
                                    <td>SBI</td>
                                    <td>MI525846</td>
                                    <td>100000</td>
                                    <td>150000</td>
                                    <td>03/10/2025</td>
                                    <td><button>View</button></td>
                                </tr>
                                <tr>
                                    <td>RBL</td>
                                    <td>MI525846</td>
                                    <td>100000</td>
                                    <td>150000</td>
                                    <td>03/10/2025</td>
                                    <td><button>View</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade fund_modal" id="add_fund_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                    <svg data-dismiss="modal" viewBox="0 0 311 311.07733" xmlns="http://www.w3.org/2000/svg"><path d="m16.035156 311.078125c-4.097656 0-8.195312-1.558594-11.308594-4.695313-6.25-6.25-6.25-16.382812 0-22.632812l279.0625-279.0625c6.25-6.25 16.382813-6.25 22.632813 0s6.25 16.382812 0 22.636719l-279.058594 279.058593c-3.136719 3.117188-7.234375 4.695313-11.328125 4.695313zm0 0"/><path d="m295.117188 311.078125c-4.097657 0-8.191407-1.558594-11.308594-4.695313l-279.082032-279.058593c-6.25-6.253907-6.25-16.386719 0-22.636719s16.382813-6.25 22.636719 0l279.058594 279.0625c6.25 6.25 6.25 16.382812 0 22.632812-3.136719 3.117188-7.230469 4.695313-11.304687 4.695313zm0 0"/></svg>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                    <h4 class="modal-title">Please fill the details:-</h4>
                    <form action="#" method="post" id="main_login_form" novalidate="">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label>Bank Name</label>
                                    <input type="text" name="name" id="name0" required="">
                                </div>
                                <div class="form-group">
                                    <label>Account Number</label>
                                    <input type="text" name="name" id="name0" required="">
                                </div>
                                <div class="form-group">
                                    <label>Investment</label>
                                    <input type="number" name="name" id="name0" required="">
                                </div>
                                <div class="form-group">
                                    <label>Opening Date</label>
                                    <input type="date" name="name" id="name0" required="">
                                </div>
                                <div class="form-group">
                                    <label>Tenure</label>
                                    <input type="number" name="name" id="name0" required="">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-12 col-md-12 btn-container">
                            <button data-dismiss="modal">Cancel</button>
                            <button>Submit</button>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>  

<?php include_once('./footer.php'); ?>