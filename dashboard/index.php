<?php  $currentPage = 'index';
       include_once('./header.php'); ?>

        <div class="wrapper">
            <div class="page-content">
                <div class="dashboard">
                    <div class="page-title big">
                        Hi
                        <span class="nickname">Umang</span>
                    </div>
                    <div class="margins-stats stats-block amount-detail-box">
                        <div class="data-box">
                            <div class="secondary-title">
                                <div class="name">FD Amount</div>
                                <div class="value">
                                    1,00,250
                                </div>
                            </div>
                            <div class="secondary-title">
                                <div class="name">Interest Earned</div> 
                                <div class="value interest">
                                    <span>12,520</span><span>+ 1.25%</span>
                                </div>
                            </div>
                            <div class="secondary-title">
                                <div class="name">Total Maturity Amount</div> 
                                <div class="value">
                                    1,12,250
                                </div>
                            </div>
                        </div>
                        <div class="add-button" data-toggle="modal" data-target="#add_fund_modal">
                            <span class="icon icon-plus"></span>
                            <span>Add FD</span>
                        </div>
                    </div>
                    <!-- <div class="stats-block holdings">
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
                                        <span class="label"><img src="../img/partners/2.png"></span> 
                                        <span class="value">2</span>
                                    </div> 
                                    <div class="block">
                                        <span class="label"><img src="../img/partners/1.png"></span> 
                                        <span class="value">1</span>
                                    </div>
                                    <div class="block">
                                        <span class="label"><img src="../img/partners/5.png"></span> 
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
                    </div> -->
                    <div class="stats-block no-border">
                        <table id="fd_by_merainterest" class="fd_table stripe">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Bank Name</th>
                                    <th>A/C No.</th>
                                    <th>FD Open Date</th>
                                    <th>Tenure(Months)</th>
                                    <th>Maturity Date</th>
                                    <th>Interest Rate</th>
                                    <th>FD Amount</th>
                                    <th>Interest Earned</th>
                                    <th>Maturity Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>RBL Bank</td>
                                    <td>12345678</td>
                                    <td>1-Jan-20</td>
                                    <td>24</td>
                                    <td>31-Dec-21</td>
                                    <td>8.50%</td>
                                    <td>200,000</td>
                                    <td>34,000</td>
                                    <td>234,000</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>RBL Bank</td>
                                    <td>5678952</td>
                                    <td>1-Jul-20</td>
                                    <td>12</td>
                                    <td>31-May-21</td>
                                    <td>8.75%</td>
                                    <td>150,000</td>
                                    <td>13,125</td>
                                    <td>163,125</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>RBL Bank</td>
                                    <td>12345678</td>
                                    <td>15-Jan-20</td>
                                    <td>24</td>
                                    <td>14-Dec-21</td>
                                    <td>8.50%</td>
                                    <td>200,000</td>
                                    <td>34,000</td>
                                    <td>234,000</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>AU Small Finance Bank</td>
                                    <td>12345678</td>
                                    <td>15-Jan-20</td>
                                    <td>24</td>
                                    <td>31-May-21</td>
                                    <td>8.50%</td>
                                    <td>200,000</td>
                                    <td>34,000</td>
                                    <td>234,000</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Sarvodaya Bank</td>
                                    <td>5678952</td>
                                    <td>1-Jul-20</td>
                                    <td>12</td>
                                    <td>31-May-21</td>
                                    <td>8.75%</td>
                                    <td>150,000</td>
                                    <td>13,125</td>
                                    <td>163,125</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>IndusInd Bank</td>
                                    <td>12345678</td>
                                    <td>15-Jul-20</td>
                                    <td>24</td>
                                    <td>14-Dec-21</td>
                                    <td>8.50%</td>
                                    <td>200,000</td>
                                    <td>34,000</td>
                                    <td>234,000</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>1,050,000</td>
                                <td>141,375</td>
                                <td>1,191,375</td>
                            </tfoot>
                        </table>
                    </div>

                    <div class="stats-block no-border">
                        <table id="fd_by_manually" class="fd_table stripe">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Bank Name</th>
                                    <th>A/C No.</th>
                                    <th>FD Open Date</th>
                                    <th>Tenure(Months)</th>
                                    <th>Maturity Date</th>
                                    <th>Interest Rate</th>
                                    <th>FD Amount</th>
                                    <th>Interest Earned</th>
                                    <th>Maturity Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>SBI</td>
                                    <td>12345678</td>
                                    <td>1-Jan-20</td>
                                    <td>24</td>
                                    <td>31-Dec-21</td>
                                    <td>8.50%</td>
                                    <td>200,000</td>
                                    <td>34,000</td>
                                    <td>234,000</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>SBI</td>
                                    <td>5678952</td>
                                    <td>1-Jul-20</td>
                                    <td>12</td>
                                    <td>31-May-21</td>
                                    <td>8.75%</td>
                                    <td>150,000</td>
                                    <td>13,125</td>
                                    <td>163,125</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>SBI</td>
                                    <td>12345678</td>
                                    <td>15-Jan-20</td>
                                    <td>24</td>
                                    <td>14-Dec-21</td>
                                    <td>8.50%</td>
                                    <td>200,000</td>
                                    <td>34,000</td>
                                    <td>234,000</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>SBI</td>
                                    <td>12345678</td>
                                    <td>15-Jan-20</td>
                                    <td>24</td>
                                    <td>31-May-21</td>
                                    <td>8.50%</td>
                                    <td>200,000</td>
                                    <td>34,000</td>
                                    <td>234,000</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>ICICI Bank</td>
                                    <td>5678952</td>
                                    <td>1-Jul-20</td>
                                    <td>12</td>
                                    <td>31-May-21</td>
                                    <td>8.75%</td>
                                    <td>150,000</td>
                                    <td>13,125</td>
                                    <td>163,125</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>ICICI Bank</td>
                                    <td>12345678</td>
                                    <td>15-Jul-20</td>
                                    <td>24</td>
                                    <td>14-Dec-21</td>
                                    <td>8.50%</td>
                                    <td>200,000</td>
                                    <td>34,000</td>
                                    <td>234,000</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>1,050,000</td>
                                <td>141,375</td>
                                <td>1,191,375</td>
                            </tfoot>
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
                                    <label>FD Amount</label>
                                    <input type="number" name="name" id="name0" required="">
                                </div>
                                <div class="form-group">
                                    <label>Interest Rate</label>
                                    <input type="number" name="name" id="name0" required="">
                                </div>
                                <div class="form-group">
                                    <label>FD Open Date</label>
                                    <input type="date" name="name" id="name0" required="">
                                </div>
                                <div class="form-group">
                                    <label>Tenure(Months)</label>
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