
   <script type="text/javascript" src="{{ url('assets/node_modules/jquery/dist/jquery.min.js') }}"></script>
   <script type="text/javascript" src="{{ url('assets/node_modules/coreui-pro/js/coreui.min.js') }}"></script>
   <script type="text/javascript" src="{{ url('assets/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
   <script type="text/javascript" src="{{ url('assets/node_modules/perfect-scrollbar/js/perfect-scrollbar.min.js') }}"></script>
   <script type="text/javascript" src="{{ url('assets/node_modules/loader/js/jquery.loadingModal.js') }}"></script>
   <script type="text/javascript" src="{{ url('assets/node_modules/loader/js/jquery.loadingModal.min.js') }}"></script>


   <script type="text/javascript" src="{{ url('assets/js/loading_btn/spin.min.js') }}"></script>
   <script type="text/javascript" src="{{ url('assets/js/loading_btn/ladda.min.js') }}"></script>
   <script src="https://coreui.io/docs/assets/js/loading-buttons.js"></script>

   <script type="text/javascript" src="{{ url('assets/node_modules/datatables/jquery.dataTables.js') }}"></script>
   <script type="text/javascript" src="{{ url('assets/node_modules/datatables/dataTables.bootstrap4.js') }}"></script>
   <script type="text/javascript" src="{{ url('assets/node_modules/datatables/datatables.js') }}"></script>
   
    
<script type="text/javascript">

    var arrayVar = [];
    var arrayVarPurchases = [];
    var arrayVarSales = [];
    var totalArray = [];
    var totalArrayPurchases = [];
    var totalArraySales = [];
    var totalInt;
    var totalIntPurchases;
    var totalIntSales;
    var freight_charge = 0;
    var purchase_fcharge = 0;
    var overall_total;
    var overall_totalPurchases;
    var overall_totalSales;
    var data;
    var dataPurchases;
    var dataSales;
    var sumDebit = 0;
    var sumCredit = 0;


            function zoom() {
               document.body.style.zoom = "120%";
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

             $(".alert-success").hide();

             //add item to form dynamically
             $('.addrow').click(function() {
               $("#item").clone().insertAfter("div.item:last");
             });

              //remove item to form dynamically
             $('.removerow').click(function() {
               $(".item").not(':first').last().remove();
             });

             //remove item to form dynamically
             $('#voucher_type').change(function() {
                var type = $('#voucher_type').val();

                if(type == 'Check Voucher'){
                  $('#check_div').slideDown("slow");
                }else{
                  $('#check_div').hide();
                }   
             });

             $(document).ready(function() {
                //this calculates values automatically 
                

                $("button.checkEntries").on("click", function() {

                    sumDebit = 0;
                    sumCredit = 0;

                    calculateSumDebit();
                    calculateSumCredit();

                    if(sumDebit!==sumCredit){
                        swal({
                          title: "Pls. Double Check Entries!",
                          text: "Message will close in 3 seconds",
                          type: "warning",
                          timer: 3000
                        });

                       $("button.registerItem").prop("disabled", true);
                    }else{
                       $("button.registerItem").prop("disabled", false);
                    }


                });
             });
              
              function calculateSumDebit() {
                
                  //iterate through each textboxes and add the values
                  $(".debit").each(function() {
                      //add only if the value is number
                      if (!isNaN(this.value) && this.value.length != 0) {
                          sumDebit += parseFloat(this.value);
                          $(this).css("background-color", "#FEFFB0");
                      }
                      else if (this.value.length != 0){
                          $(this).css("background-color", "red");
                      }
                  });
               
               $("#totaldebit").val(sumDebit.toFixed(2));
              }

              function calculateSumCredit() {
                  
                  //iterate through each textboxes and add the values
                  $(".credit").each(function() {
                      //add only if the value is number
                      if (!isNaN(this.value) && this.value.length != 0) {
                          sumCredit += parseFloat(this.value);
                          $(this).css("background-color", "#FEFFB0");
                      }
                      else if (this.value.length != 0){
                          $(this).css("background-color", "red");
                      }
                  });
               
               $("#totalcredit").val(sumCredit.toFixed(2));
              }

             $("#bill-form").on('submit',function(e){
              e.preventDefault();
                $('body').loadingModal({
                text: 'Loading...'
                });

                  var bill_year   = $("#bill_year option:selected").val();
                  var bill_month  = $("#bill_month option:selected").val();
                  var bill_period = $("#bill_period option:selected").val();

                  var bill_date = bill_month+"-"+bill_period+"-"+bill_year;
 
                   $.post("{{ url('/addbill') }}", { 'bill_year':bill_year, 'bill_month':bill_month, 'bill_period':bill_period, 'bill_date':bill_date }, function(data){

                        if(data.notify=='Success'){
                            $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                             document.getElementById("bill-form").reset();
                             console.log(data.year);
                             console.log(data.month);
                             console.log(data.period);
                             console.log(data.amortizations);
     
                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");
              });


              $(".btn-submit-search").click(function(e){
                e.preventDefault();
               
                  $('body').loadingModal({
                  text: 'Loading...'
                  });

                  var year        = $("#search_year option:selected").val();
                  var month       = $("#search_month option:selected").val();
                  var period      = $("#search_period option:selected").val();
                  var lname       = $("#search_lname").val();
                  var fname       = $("#search_fname").val();
                  var mname       = $("#search_mname").val();
                  var loan_type   = $("#search_loan_typeoption:selected").val();
                  var loan_status = $("#search_loan_status option:selected").val();
 
                  $.post("{{ url('/searchloan') }}", {'year':year, 
                                                        'month':month,
                                                        'period':period,
                                                        'lname':lname,
                                                        'fname':fname,
                                                        'mname':mname,
                                                        'loan_type':loan_type,
                                                        'loan_status':loan_status
                                                      }, 
                      function(data){
                      $('body').loadingModal('hide');
                      $('#searchLoanModal').modal('hide'); 
                      $('#loanLedgerModal').modal('show').find('.modal-body').html(data);
                    },"html");
              });


              $("#journalvoucher-form").on('submit',function(e){
                e.preventDefault();
                  $('body').loadingModal({
                  text: 'Loading...'
                  });
                   $.post("{{ url('/addjournalvoucher') }}", $("#journalvoucher-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                            $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                             document.getElementById("journalvoucher-form").reset();
     
                        } else{
                          console.log(data.notify);
                        }
                    },"json");
              });

              $("#member-form").on('submit',function(e){
                e.preventDefault();
                  $('body').loadingModal({
                  text: 'Loading...'
                  });
                   $.post("{{ url('/addmember') }}", $("#member-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                            $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                             document.getElementById("member-form").reset();
     
                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");
              });

               $("#payment-form").on('submit',function(e){
                  e.preventDefault();
                  $('body').loadingModal({
                  text: 'Loading...'
                  });

                 /* if($('#payment_amortization').val() >= $('#payment_amount').val() ){*/

                       $.post("{{ url('/addpayment') }}", $("#payment-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                            $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                             console.log(data.exist);
                             console.log(data.amort_loan);

                             document.getElementById("payment-form").reset();
     
                        } else{
                          console.log(data.notify);
                        }
                    
                    },"json");
                  /*}else{
                       $('body').loadingModal('hide');
                       swal({
                          title: "Error cannot save payment amount is greater than the amortization amount",
                          text: "Message will close in 7 seconds",
                          type: "error",
                          timer: 7000
                        });
                  }  */
              });

               $("#payee-form").on('submit',function(e){
                  e.preventDefault();
                  $('body').loadingModal({
                  text: 'Loading...'
                  });

                   $.post("{{ url('/addpayee') }}", $("#payee-form").serialize(), function(data){

                    if(data.notify=='Success'){  
                        $('body').loadingModal('hide');
                         swal({
                                title: "Record successfully saved",
                                text: "Message will close in 2 seconds",
                                type: "success",
                                timer: 2000
                              });

                         document.getElementById("payee-form").reset();
 
                    } else{
                      console.log(data.notify);
                    }
                
                },"json");
               });


               //register new account name
              $("#accountcategory-form").on('submit',function(e){
                e.preventDefault();

                $('body').loadingModal({
                  text: 'Loading...'
                });
                  
                   $.post("{{ url('/addaccountcategory') }}", $("#accountcategory-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                             $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                             document.getElementById("accountcategory-form").reset();

     
                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");
              });


              //register new account name
              $("#accountname-form").on('submit',function(e){
                e.preventDefault();

                $('body').loadingModal({
                  text: 'Loading...'
                });
                  
                   $.post("{{ url('/addaccountname') }}", $("#accountname-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                             $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                             document.getElementById("accountname-form").reset();

     
                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");
              });

              //register new position
              $("#position-form").on('submit',function(e){
                e.preventDefault();

                $('body').loadingModal({
                  text: 'Loading...'
                });
                  
                   $.post("{{ url('/addposition') }}", $("#position-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                             $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                             document.getElementById("position-form").reset();

     
                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");
              });

              //register new bill
              $("#bill-form").on('submit',function(e){
                e.preventDefault();
                  
                $('body').loadingModal({
                  text: 'Loading...'
                });
                  
                   $.post("{{ url('/addbill') }}", $("#bill-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                             $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                             document.getElementById("bill-form").reset();
                             console.log(data.notify);
     
                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");
              });

               //register new division
              $("#division-form").on('submit',function(e){
                e.preventDefault();
                   $('body').loadingModal({
                    text: 'Loading...'
                  });
                   $.post("{{ url('/adddivision') }}", $("#division-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                            $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                             document.getElementById("division-form").reset();
     
                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");
              });

                //register new particular
              $("#particular-form").on('submit',function(e){
                e.preventDefault();
                   $('body').loadingModal({
                    text: 'Loading...'
                  });
                   $.post("{{ url('/addparticular') }}", $("#particular-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                            $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                             document.getElementById("particular-form").reset();
     
                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");
              });


               //register new product/service
              $("#productservice-form").on('submit',function(e){
                e.preventDefault();
                   $('body').loadingModal({
                    text: 'Loading...'
                  });
                   $.post("{{ url('/addproductservice') }}", $("#productservice-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                            $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                             document.getElementById("productservice-form").reset();
     
                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");
              });

              //show bill page
              $("#show-bill-form").on('submit',function(e){
                e.preventDefault();

                $('body').loadingModal({
                  text: 'Loading...'
                });

                  var bill_year   = $("#show_bill_year option:selected").val();
                  var bill_month  = $("#show_bill_month option:selected").val();
                  var bill_period = $("#show_bill_period option:selected").val();

                  var bill_date = bill_month+"-"+bill_period+"-"+bill_year;
                  window.open("{{ url('/show-bill') }}"+"/"+bill_date, "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=100,left=500,width=900, height=600");
                  $('body').loadingModal('hide');
              });

              //show summary page
              $("#show-summary-form").on('submit',function(e){
                e.preventDefault();

                $('body').loadingModal({
                  text: 'Loading...'
                });

                  var summary_year   = $("#show_summary_year option:selected").val();
                  var summary_month  = $("#show_summary_month option:selected").val();
                  var summary_type   = $("#show_summary_type option:selected").val();

                  var summary_date = summary_month+"-"+summary_year+"-"+summary_type;
                  window.open("{{ url('/show-summary') }}"+"/"+summary_date, "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=100,left=500,width=1200, height=600");
                  $('body').loadingModal('hide');
              });


               //show loan releases page
              $("#show-loanreleases-form").on('submit',function(e){
                e.preventDefault();

                $('body').loadingModal({
                  text: 'Loading...'
                });

                  var loan_year   = $("#show_loan_year option:selected").val();
                  var loan_month  = $("#show_loan_month option:selected").val();
                  var loan_period = $("#show_loan_period option:selected").val();

                  var loan_date = loan_month+"-"+loan_period+"-"+loan_year;
                  window.open("{{ url('/show-loanreleases') }}"+"/"+loan_date, "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=100,left=500,width=1500, height=600");
                  $('body').loadingModal('hide');
              });


              //show payment page
              $("#show-paymentreceived-form").on('submit',function(e){
                e.preventDefault();

                $('body').loadingModal({
                  text: 'Loading...'
                });

                  var payment_year   = $("#show_payment_year option:selected").val();
                  var payment_month  = $("#show_payment_month option:selected").val();
                  var payment_period = $("#show_payment_period option:selected").val();

                  var payment_date = payment_month+"-"+payment_period+"-"+payment_year;
                  window.open("{{ url('/show-paymentreceived') }}"+"/"+payment_date, "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=100,left=500,width=1500, height=600");
                  $('body').loadingModal('hide');
              });

              // Edit Member

              $(".edit-member").click(function(e){

                e.preventDefault();

                var valArray = [];      
                  
                $(".member-id-checkbox:input:checkbox:checked").each(function(i){
                  valArray[i] = $(this).val();
                });

                if( valArray > 0 ){

                $('.table-members-content tr.tbl-members-row').filter(':has(:checkbox:checked)').each(function() {
                    // this = tr
                    $tr = $(this);
                    $('td', $tr).each(function() {
                        // If you need to iterate the TD's
                        
                        document.getElementById("primary_id").value               = $tr.find('td:eq(1)').html();
                        document.getElementById("member_code").value              = $tr.find('td:eq(2)').html();
                        document.getElementById("editMember_name").value          = $tr.find('td:eq(3)').text();
                        document.getElementById("editMember_mname").value         = $tr.find('td:eq(4)').text();
                        document.getElementById("editMember_lname").value         = $tr.find('td:eq(5)').html();
                        document.getElementById("editMember_extension").value     = $tr.find('td:eq(6)').text();
                        document.getElementById("editMember_dateofbirth").value   = $tr.find('td:eq(7)').text();
                        document.getElementById("editMember_maritalstatus").value = $tr.find('td:eq(8)').html();
                        document.getElementById("editMember_sex").value           = $tr.find('td:eq(9)').html();
                        document.getElementById("editMember_age").value           = $tr.find('td:eq(10)').html();
                        document.getElementById("editMember_homeaddress").value   = $tr.find('td:eq(11)').html();
                        document.getElementById("editMember_division").value      = $tr.find('td:eq(12)').html();
                        document.getElementById("editMember_particular").value    = $tr.find('td:eq(13)').html();
                        document.getElementById("editMember_email").value         = $tr.find('td:eq(14)').html();
                        document.getElementById("editMember_contact").value       = $tr.find('td:eq(15)').html();
                        document.getElementById("editMember_photourl").value      = $tr.find('td:eq(16)').html();
                        document.getElementById("editMember_type").value          = $tr.find('td:eq(17)').html();
                        document.getElementById("editMember_status").value        = $tr.find('td:eq(18)').html();

                        $('#editMemberModal').modal('show');

                    });

                });

              } else{

                swal("Please select a record. Thanks.", "")

              }

          });

          $(".edit-journalvouchers-details").click(function(e){

                e.preventDefault();

                var valArray = [];      
                  
                $(".journalvoucher-id-checkbox:input:checkbox:checked").each(function(i){
                  valArray[i] = $(this).val();
                });

                if( valArray > 0 ){

                $('.table-journalvouchers-content tr.tbl-journalvouchers-row').filter(':has(:checkbox:checked)').each(function() {
                    // this = tr
                    $tr = $(this);
                    $('td', $tr).each(function() {
                        // If you need to iterate the TD's
                        
                        document.getElementById("primary_id").value               = $tr.find('td:eq(1)').html();
                        document.getElementById("editVoucher_number").value       = $tr.find('td:eq(2)').html();
                        document.getElementById("EditVoucher_type").value         = $tr.find('td:eq(3)').text();
                        document.getElementById("Editpayee_name").value           = $tr.find('td:eq(4)').text();
                        document.getElementById("Editaddress").value              = $tr.find('td:eq(5)').html();
                        document.getElementById("Edittransaction_date").value     = $tr.find('td:eq(6)').html();
                        document.getElementById("Editproduct_service").value      = $tr.find('td:eq(7)').text();
                        document.getElementById("Editparticular").value           = $tr.find('td:eq(8)').text();
                        document.getElementById("Editdebit").value                = $tr.find('td:eq(9)').html();
                        document.getElementById("Editcredit").value               = $tr.find('td:eq(10)').html();
                        document.getElementById("Editremarks").value              = $tr.find('td:eq(12)').html();


                        $('#editJournalvoucherModal').modal('show');

                    });

                });

              } else{

                swal("Please select a record. Thanks.", "")

              }

          });

           $(".deactivate-vouchers").click(function(e){

                e.preventDefault();

                var valArray = [];      
                  
                $(".journalvoucher-id-checkbox:input:checkbox:checked").each(function(i){
                  valArray[i] = $(this).val();
                });

                if( valArray > 0 ){

                $('.table-journalvouchers-content tr.tbl-journalvouchers-row').filter(':has(:checkbox:checked)').each(function() {
                    // this = tr
                    $tr = $(this);
                    $('td', $tr).each(function() {
                        // If you need to iterate the TD's
                        
                        document.getElementById("primary_id").value                = $tr.find('td:eq(1)').html();
                        document.getElementById("deactvoucher_number").value       = $tr.find('td:eq(2)').html();
                        document.getElementById("deactremarks").value              = $tr.find('td:eq(12)').html();


                        $('#deactivateVoucherModal').modal('show');

                    });

                });

              } else{

                swal("Please select a record. Thanks.", "")

              }

          });

         // retrieve account name data for updating
          $(".edit-accountname").click(function(e){

                e.preventDefault();

                var valArray = [];      
                  
                $(".accountname-id-checkbox:input:checkbox:checked").each(function(i){
                  valArray[i] = $(this).val();
                });

                if( valArray > 0 ){

                $('.table-accountnames-content tr.tbl-accountnames-row').filter(':has(:checkbox:checked)').each(function() {
                    // this = tr
                    $tr = $(this);
                    $('td', $tr).each(function() {
                        // If you need to iterate the TD's
                        document.getElementById("primary_id").value               = $tr.find('td:eq(1)').html();
                        document.getElementById("editCategory_code").value        = $tr.find('td:eq(3)').text();
                        document.getElementById("editAccount_code").value         = $tr.find('td:eq(4)').text();
                        document.getElementById("editAccount_name").value         = $tr.find('td:eq(5)').text();
                        document.getElementById("editDescription").value          = $tr.find('td:eq(6)').text();
                       
                        $('#editAccountnameModal').modal('show');

                    });

                });

              } else{

                swal("Please select a record. Thanks.", "")

              }

          });

           // retrieve account name data for updating
          $(".edit-accountcategory").click(function(e){

                e.preventDefault();

                var valArray = [];      
                  
                $(".category-id-checkbox:input:checkbox:checked").each(function(i){
                  valArray[i] = $(this).val();
                });

                if( valArray > 0 ){

                $('.table-accountcategories-content tr.tbl-accountcategories-row').filter(':has(:checkbox:checked)').each(function() {
                    // this = tr
                    $tr = $(this);
                    $('td', $tr).each(function() {
                        // If you need to iterate the TD's
                        document.getElementById("primary_id").value               = $tr.find('td:eq(1)').html();
                        document.getElementById("editCategory_code").value        = $tr.find('td:eq(3)').text();
                        document.getElementById("editCategory_name").value        = $tr.find('td:eq(4)').text();
                        document.getElementById("editDescription").value          = $tr.find('td:eq(5)').text();
                       
                        $('#editAccountcategoryModal').modal('show');

                    });

                });

              } else{

                swal("Please select a record. Thanks.", "")

              }

          });


          // retrieve productservice data for updating
          $(".edit-productservice").click(function(e){

                e.preventDefault();

                var valArray = [];      
                  
                $(".productservice-id-checkbox:input:checkbox:checked").each(function(i){
                  valArray[i] = $(this).val();
                });

                if( valArray > 0 ){

                $('.table-productservices-content tr.tbl-productservices-row').filter(':has(:checkbox:checked)').each(function() {
                    // this = tr
                    $tr = $(this);
                    $('td', $tr).each(function() {
                        // If you need to iterate the TD's
                        
                        document.getElementById("primary_id").value               = $tr.find('td:eq(1)').html();
                        document.getElementById("edit_name").value                 = $tr.find('td:eq(3)').text();
                        document.getElementById("editDescription").value          = $tr.find('td:eq(4)').text();
                       
                        $('#editProductserviceModal').modal('show');

                    });

                });

              } else{

                swal("Please select a record. Thanks.", "")

              }

          });

          // retrieve division data for updating
          $(".edit-division").click(function(e){

                e.preventDefault();

                var valArray = [];      
                  
                $(".division-id-checkbox:input:checkbox:checked").each(function(i){
                  valArray[i] = $(this).val();
                });

                if( valArray > 0 ){

                $('.table-division-content tr.tbl-divisions-row').filter(':has(:checkbox:checked)').each(function() {
                    // this = tr
                    $tr = $(this);
                    $('td', $tr).each(function() {
                        // If you need to iterate the TD's
                        
                        document.getElementById("primary_id").value               = $tr.find('td:eq(1)').html();
                        document.getElementById("editDivision_name").value        = $tr.find('td:eq(3)').text();
                        document.getElementById("editDescription").value          = $tr.find('td:eq(4)').text();
                       
                        $('#editDivisionModal').modal('show');

                    });

                });

              } else{

                swal("Please select a record. Thanks.", "")

              }

          });

          // retrieve particular data for updating
          $(".edit-particular").click(function(e){

                e.preventDefault();

                var valArray = [];      
                  
                $(".particular-id-checkbox:input:checkbox:checked").each(function(i){
                  valArray[i] = $(this).val();
                });

                if( valArray > 0 ){

                $('.table-particular-content tr.tbl-particulars-row').filter(':has(:checkbox:checked)').each(function() {
                    // this = tr
                    $tr = $(this);
                    $('td', $tr).each(function() {
                        // If you need to iterate the TD's
                        
                        document.getElementById("primary_id").value               = $tr.find('td:eq(1)').html();
                        document.getElementById("editParticular_name").value      = $tr.find('td:eq(3)').text();
                        document.getElementById("editDescription").value          = $tr.find('td:eq(4)').text();
                       
                        $('#editParticularModal').modal('show');

                    });

                });

              } else{

                swal("Please select a record. Thanks.", "")

              }

          });

           // retrieve payee data for updating
          $(".edit-payee").click(function(e){

                e.preventDefault();

                var valArray = [];      
                  
                $(".payee-id-checkbox:input:checkbox:checked").each(function(i){
                  valArray[i] = $(this).val();
                });

                if( valArray > 0 ){

                $('.table-payees-content tr.tbl-payees-row').filter(':has(:checkbox:checked)').each(function() {
                    // this = tr
                    $tr = $(this);
                    $('td', $tr).each(function() {
                        // If you need to iterate the TD's
                        
                        document.getElementById("primary_id").value               = $tr.find('td:eq(1)').html();
                        document.getElementById("editPayee_name").value           = $tr.find('td:eq(3)').text();
                        document.getElementById("editDescription").value          = $tr.find('td:eq(4)').text();
                        document.getElementById("editAddress").value              = $tr.find('td:eq(5)').text();
                       
                        $('#editPayeeModal').modal('show');

                    });

                });

              } else{

                swal("Please select a record. Thanks.", "")

              }

          });

          // Edit Member

              $(".edit-user").click(function(e){

                e.preventDefault();

                var valArray = [];      
                  
                $(".user-id-checkbox:input:checkbox:checked").each(function(i){
                  valArray[i] = $(this).val();
                });

                if( valArray > 0 ){

                $('.table-users-content tr.tbl-users-row').filter(':has(:checkbox:checked)').each(function() {
                    // this = tr
                    $tr = $(this);
                    $('td', $tr).each(function() {
                        // If you need to iterate the TD's
                        
                        document.getElementById("primary_id").value     = $tr.find('td:eq(1)').html();
                        document.getElementById("user_id").value        = $tr.find('td:eq(2)').html();
                        document.getElementById("editUsername").value   = $tr.find('td:eq(3)').text();
                        document.getElementById("editEmail").value      = $tr.find('td:eq(4)').text();
                        document.getElementById("editRole_id").value    = $tr.find('td:eq(5)').text();
                        document.getElementById("editPhoto_url").value  = $tr.find('td:eq(8)').text();
                        
                        $('#editUserModal').modal('show');

                    });

                });

              } else{

                swal("Please select a record. Thanks.", "")

              }

          });

          //save position data
          $("#update-position-form").on("submit",function(e){

          e.preventDefault();
          $('body').loadingModal({
                  text: 'Loading...'
                });
          $.post("{{ url('updateposition') }}", $("#update-position-form").serialize(), function(data){
          $('body').loadingModal('hide');   
                if(data.notify == "Success"){
                            
                    swal({
                          title: "Record successfully updated",
                          text: "Message will close in 2 seconds",
                          type: "success",
                          timer: 2000
                        });

                } else{

                  console.log(data.notify);

                }

              },"json"); 

          });

          //save position data
          $("#voucher-form").on("submit",function(e){

          e.preventDefault();
          $('body').loadingModal({
                  text: 'Loading...'
                });
          $.post("{{ url('updatestatus') }}", $("#voucher-form").serialize(), function(data){
          $('body').loadingModal('hide');   
                if(data.notify == "Success"){
                            
                    swal({
                          title: "Record successfully updated",
                          text: "Message will close in 2 seconds",
                          type: "success",
                          timer: 2000
                        });

                } else{

                  console.log(data.notify);

                }

              },"json"); 

          });

           //save payee data
          $("#update-payee-form").on("submit",function(e){

          e.preventDefault();
          $('body').loadingModal({
                  text: 'Loading...'
                });
          $.post("{{ url('updatepayee') }}", $("#update-payee-form").serialize(), function(data){
          $('body').loadingModal('hide');   
                if(data.notify == "Success"){
                            
                    swal({
                          title: "Record successfully updated",
                          text: "Message will close in 2 seconds",
                          type: "success",
                          timer: 2000
                        });

                } else{

                  console.log(data.notify);

                }

              },"json"); 

          });

          $("#update-productservice-form").on("submit",function(e){

          e.preventDefault();
          $('body').loadingModal({
                  text: 'Loading...'
                });
          $.post("{{ url('updateproductservice') }}", $("#update-productservice-form").serialize(), function(data){
          $('body').loadingModal('hide');   
                if(data.notify == "Success"){
                            
                    swal({
                          title: "Record successfully updated",
                          text: "Message will close in 2 seconds",
                          type: "success",
                          timer: 2000
                        });

                } else{

                  console.log(data.notify);

                }

              },"json"); 

          });

           //save position data
          $("#update-accountname-form").on("submit",function(e){

          e.preventDefault();
           $('body').loadingModal({
                  text: 'Loading...'
                });

          $.post("{{ url('updateaccountname') }}", $("#update-accountname-form").serialize(), function(data){
                $('body').loadingModal('hide');
                if(data.notify == "Success"){
                            
                    swal({
                          title: "Record successfully updated",
                          text: "Message will close in 2 seconds",
                          type: "success",
                          timer: 2000
                        });

                } else{

                  console.log(data.notify);

                }

              },"json"); 

          });


           //save account category data
          $("#update-accountcategory-form").on("submit",function(e){

             e.preventDefault();
             $('body').loadingModal({
                    text: 'Loading...'
                  });

            $.post("{{ url('updateaccountcategory') }}", $("#update-accountcategory-form").serialize(), function(data){
                  $('body').loadingModal('hide');
                  if(data.notify == "Success"){
                              
                      swal({
                            title: "Record successfully updated",
                            text: "Message will close in 2 seconds",
                            type: "success",
                            timer: 2000
                          });

                  } else{

                    console.log(data.notify);

                  }

                },"json"); 
          });

              //Update Member

          $("#update-member-form").on("submit",function(e){

          e.preventDefault();
          $('body').loadingModal({
                  text: 'Loading...'
                });
          $.post("{{ url('updatemember') }}", $("#update-member-form").serialize(), function(data){
          $('body').loadingModal('hide'); 
              if(data.notify == "Success"){
                          
                  swal({
                        title: "Record successfully updated",
                        text: "Message will close in 2 seconds",
                        type: "success",
                        timer: 2000
                      });

              } else{

                console.log(data.notify);

              }


            },"json"); 

          });

          //update journal voucher
          $("#update-journalvoucher-form").on("submit",function(e){

          e.preventDefault();
          $('body').loadingModal({
                  text: 'Loading...'
                });
          $.post("{{ url('updatejournalvoucher') }}", $("#update-journalvoucher-form").serialize(), function(data){
          $('body').loadingModal('hide'); 
              if(data.notify == "Success"){
                          
                  swal({
                        title: "Record successfully updated",
                        text: "Message will close in 2 seconds",
                        type: "success",
                        timer: 2000
                      });

              } else{

                console.log(data.notify);

              }


            },"json"); 

          });

           //Update User

          $("#update-user-form").on("submit",function(e){

          e.preventDefault();
           $('body').loadingModal({
                  text: 'Loading...'
                });
          $.post("{{ url('updateuser') }}", $("#update-user-form").serialize(), function(data){
          $('body').loadingModal('hide');    
                if(data.notify == "Success"){
                            
                    swal({
                          title: "Record successfully updated",
                          text: "Message will close in 2 seconds",
                          type: "success",
                          timer: 2000
                        });

                } else{

                  console.log(data.notify);

                }


              },"json"); 

          });


          //Employee

          $("#add-employee-code").change(function(e){

                e.preventDefault();
                var employeeID = $(this).val();
                var obj;
               
                $.get("{{ url('/compareEmployeeID') }}", { 'employeeID': employeeID }, function(data){

                  obj = JSON.parse(data);

                      if( obj.notify == 'Success' ){ 

                        $(".employee-tag").prop("disabled", true);
                        
                             swal({
                                    title:employeeID+" employee id already exist.",
                                    text: "Message will close in 5 seconds",
                                    type: "warning",
                                    timer: 5000
                                  });
     
                        } else{

                          $(".employee-tag").prop("disabled", false);
                          console.log(obj.notify);

                        }

                });

          });

          /* $("#employee-form").on("submit",function(e){
                e.preventDefault();
                   $('body').loadingModal({
                        text: 'Loading...'
                        });
                   $.post("{{ url('/addemployee') }}", $("#employee-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                           $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                             document.getElementById("employee-form").reset();
     
                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");
              });
*/

          //Section IV

          //$("#pds-form").on("submit",function(e){
            /*$(".btn-submit-employee").on("click", function(e){
                e.preventDefault();
                   $('body').loadingModal({
                        text: 'Loading...'
                        });
                   $.post("{{ url('/addemployee') }}", $(this).serialize(), function(data){

                        if(data.notify=='Success'){  
                           $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                        } else{

                          console.log(data.notify);

                      }
                    
                  },"json");
          if($(this).is(".btn-submit-employee")){
         $("#btn-submit-id").val("Update");
         $(".btn-submit-employee").addClass("btn-update-employee");
         $(".btn-submit-employee").removeClass("btn-submit-employee");
         alert('submit'); 
      }else{
         alert('Update'); 
      }
            });*/


          /*$(".btn-update-employee").on("click", function(e){

            e.preventDefault();
            $('body').loadingModal({
                        text: 'Loading...'
                        });
                   $.post("{{ url('/updateEmployee') }}", $("#pds-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                           $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                        } else{

                          console.log(data.notify);

                      }
                    
                  },"json");

          alert("df");


          });*/


          $(document).on("click",".btn-submit-employee", function(e){ 
            e.preventDefault(); 

            $('body').loadingModal({
                        text: 'Loading...'
                        });
                   $.post("{{ url('/addemployee') }}", $("#pds-form").serialize(), function(data){

                        if(data.notify=='Success'){ 

                           $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                           $("#emp_id").val(data.emp_id[0].id);  

                        } else{

                          console.log(data.notify);

                      }
                    
                  },"json");

            $("#btn-submit-id").val("Update");
            $(".btn-submit-employee").addClass("btn-update-employee");
            $(".btn-submit-employee").removeClass("btn-submit-employee");
            
           });


          $(document).on("click", ".btn-update-employee",function(e){ 
              e.preventDefault(); 
             
              $('body').loadingModal({
                        text: 'Loading...'
                        });

                   $.post("{{ url('/updateEmployee') }}", $("#pds-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                           $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully updated",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 3000
                                  });

                        } else{

                          console.log(data.notify);

                      }

                     // console.log(data.notify);
                    
                  },"json"); 

            });


          //Section V

          /*$(".pds-work-form").on("submit",function(e){
                e.preventDefault();
                   $('body').loadingModal({
                        text: 'Loading...'
                        });
                   $.post("{{ url('/addemployeeworkexp') }}", $(this).serialize(), function(data){

                      console.log(data.notify);
                    
                    },"json");
              });*/

              $("#btn-save-eligibility").click(function(e){
                
                  e.preventDefault();

                  $('body').loadingModal({
                        text: 'Loading...'
                        });
                 
                  if($(this).val() == "Save Section IV"){

                    $.post( "{{ url('/savePDS2') }}", $("#pds-form2").serialize(), function(data){

                      if(data.notify=='Success'){  
                           $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                       }else{

                          console.log(data.notify);

                      }

                    },"json");

                    $("#btn-save-eligibility").val("Update Section IV");

                  }else{

                    $.post( "{{ url('/updatePDS2') }}", $("#pds-form2").serialize(), function(data){

                      if(data.notify=='Success'){  
                        
                           $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully updated",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                       }else{

                          console.log(data.notify);

                      }

                    },"json");

                  }

              });


              $(".btn-submit-secV").click(function(e){
                e.preventDefault();

                $('body').loadingModal({
                        text: 'Loading...'
                        });

                if($(this).text()=="Save Section V"){

                  $.post("{{ url('/addemployeeworkexp') }}", $("#pds-work-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                           $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");

                  $(this).text("Update Section V");

                }else{

                  $.post( "{{ url('/updateEmpWorkExp') }}", $("#pds-work-form").serialize(), function(data){

                      if(data.notify=='Success'){  
                        
                           $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully updated",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                       }else{

                          console.log(data.notify);

                      }

                    },"json");

                }
                
            });

          //extend work form

          $(".btn-submit-workExt").click(function(e){
                e.preventDefault();

                $('body').loadingModal({
                        text: 'Loading...'
                        });

                if($(this).text()=="Save Section V-Form 2"){

                  $.post("{{ url('/addemployeeworkexp2') }}", $("#pds-work-form2").serialize(), function(data){

                        if(data.notify=='Success'){  
                           $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");

                  $(this).text("Update Section V-Form 2");

                }else{

                  $.post( "{{ url('/updateEmpWorkExp2') }}", $("#pds-work-form2").serialize(), function(data){

                      if(data.notify=='Success'){  
                        
                           $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully updated",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                       }else{

                          console.log(data.notify);

                      }

                    },"json");

                }
                
            });


          //end work extension form


              $(".btn-submit-secVI").click(function(e){
                e.preventDefault();

                $('body').loadingModal({
                        text: 'Loading...'
                        });

                if($(this).text()=="Save Section VI"){

                  $.post("{{ url('/addemployeevolwork') }}", $("#pds-vol-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                           $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");

                  $(this).text("Update Section VI");

                }else{

                  $.post("{{ url('/updateEmpVolWork') }}", $("#pds-vol-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                           $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully updated",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");

                }
                
                   
              });


              $(".btn-submit-secVII").click(function(e){
                e.preventDefault();
                
                  $('body').loadingModal({
                       text: 'Loading...'
                      });

                  if($(this).text()=="Save Section VII"){

                    $.post("{{ url('/addemployeetraining') }}", $("#pds-training-form").serialize(), function(data){

                            if(data.notify=='Success'){  
                               $('body').loadingModal('hide');
                                 swal({
                                        title: "Record successfully saved",
                                        text: "Message will close in 2 seconds",
                                        type: "success",
                                        timer: 2000
                                      });

                            } else{

                              console.log(data.notify);

                            }
                        
                        },"json");

                    $(this).text("Update Section VII");

                  }else{

                    $('body').loadingModal({
                       text: 'Loading...'
                      });

                     $.post("{{ url('/updateEmpTraining') }}", $("#pds-training-form").serialize(), function(data){

                            if(data.notify=='Success'){  
                               $('body').loadingModal('hide');
                                 swal({
                                        title: "Record successfully updated",
                                        text: "Message will close in 2 seconds",
                                        type: "success",
                                        timer: 2000
                                      });

                            } else{

                              console.log(data.notify);

                            }
                        
                        },"json");

                  }
                                 
             });


            $(".btn-submit-btrainings").click(function(e){
                e.preventDefault();
                
                  $('body').loadingModal({
                       text: 'Loading...'
                      });

                  if($(this).text()=="Save Page 2 Section VII"){

                    $.post("{{ url('/addemployeeBtraining') }}", $("#pds-btraining-form").serialize(), function(data){

                            if(data.notify=='Success'){  
                               $('body').loadingModal('hide');
                                 swal({
                                        title: "Record successfully saved",
                                        text: "Message will close in 2 seconds",
                                        type: "success",
                                        timer: 2000
                                      });

                            } else{

                              console.log(data.notify);

                            }
                        
                        },"json");

                    $(this).text("Update Page 2 Section VII");

                  }else{

                    $('body').loadingModal({
                       text: 'Loading...'
                      });

                     $.post("{{ url('/updateEmpBTraining') }}", $("#pds-btraining-form").serialize(), function(data){

                            if(data.notify=='Success'){  
                               $('body').loadingModal('hide');
                                 swal({
                                        title: "Record successfully updated",
                                        text: "Message will close in 2 seconds",
                                        type: "success",
                                        timer: 2000
                                      });

                            } else{

                              console.log(data.notify);

                            }
                        
                        },"json");

                  }
                                 
             });


            $(".btn-submit-ctrainings").click(function(e){
                e.preventDefault();
                
                  $('body').loadingModal({
                       text: 'Loading...'
                      });

                  if($(this).text()=="Save Page 3 Section VII"){

                    $.post("{{ url('/addemployeeCtraining') }}", $("#pds-ctraining-form").serialize(), function(data){

                            if(data.notify=='Success'){  
                               $('body').loadingModal('hide');
                                 swal({
                                        title: "Record successfully saved",
                                        text: "Message will close in 2 seconds",
                                        type: "success",
                                        timer: 2000
                                      });

                            } else{

                              console.log(data.notify);

                            }
                        
                        },"json");

                    $(this).text("Update Page 3 Section VII");

                  }else{

                    $('body').loadingModal({
                       text: 'Loading...'
                      });

                     $.post("{{ url('/updateEmpCTraining') }}", $("#pds-ctraining-form").serialize(), function(data){

                            if(data.notify=='Success'){  
                               $('body').loadingModal('hide');
                                 swal({
                                        title: "Record successfully updated",
                                        text: "Message will close in 2 seconds",
                                        type: "success",
                                        timer: 2000
                                      });

                            } else{

                              console.log(data.notify);

                            }
                        
                        },"json");

                  }
                                 
             });


              $(".btn-submit-sec8").click(function(e){
                e.preventDefault();

                $('body').loadingModal({
                        text: 'Loading...'
                });

                if($(this).text()=="Save Section VIII"){

                  $.post("{{ url('/addemployeeothers') }}", $("#pds-other-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                           $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");

                  $(this).text("Update Section VIII");

                }else{

                  $.post("{{ url('/updateEmpOthers') }}", $("#pds-other-form").serialize(), function(data){

                        if(data.notify=='Success'){  
                           $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully updated",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");

                }
                
              });


              $(".btn-sheet-4").click(function(e){

                e.preventDefault();

                $('body').loadingModal({
                        text: 'Loading...'
                });

                if($(this).text() == "Save details"){

                  $.post("{{ url('/savesheet4') }}", $("#pds-sheet4").serialize(), function(data){

                        if(data.notify=='Success'){  
                           $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");

                  $(this).text("Update details");

                }else{

                  $.post("{{ url('/updateSheet4') }}", $("#pds-sheet4").serialize(), function(data){

                        if(data.notify=='Success'){  
                           $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully updated",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });

                        } else{

                          console.log(data.notify);

                        }
                    
                    },"json");

                }
                
            });

              
          $(".edit-employee").click(function(e){
             
                e.preventDefault();

                var valArray = [];      
                  
                $(".employee-id-checkbox:input:checkbox:checked").each(function(i){
                  valArray[i] = $(this).val();
                });


                if( valArray > 0 ){

                  $('.table-employees-content tr.tbl-employees-row').filter(':has(:checkbox:checked)').each(function() {
                      // this = tr
                      $tr = $(this);

                      $('td', $tr).each(function() {
                          // If you need to iterate the TD's
                          var employee_status = $tr.find('td:eq(18)').html();
                         
                          if(employee_status == "Active"){
                            employee_status = 1;
                          }else{
                            employee_status = 0;
                          }

                          document.getElementById("primary_id").value                = $tr.find('td:eq(1)').html();
                          document.getElementById("editEmp_id").value                = $tr.find('td:eq(2)').html();
                          document.getElementById("editEmp_fname").value             = $tr.find('td:eq(3)').text();
                          document.getElementById("editEmp_mname").value             = $tr.find('td:eq(4)').text();
                          document.getElementById("editEmp_lname").value             = $tr.find('td:eq(5)').html();
                          document.getElementById("editEmp_extnsion").value          = $tr.find('td:eq(6)').text();
                          document.getElementById("editEmp_dateofbirth").value       = $tr.find('td:eq(7)').text();
                          document.getElementById("editEmp_maritalstatus").value     = $tr.find('td:eq(8)').html();
                          document.getElementById("editEmp_sex").value               = $tr.find('td:eq(9)').html();
                          document.getElementById("editEmp_bloodtype").value         = $tr.find('td:eq(10)').html();
                          document.getElementById("editEmp_philhealth").value        = $tr.find('td:eq(11)').html();
                          document.getElementById("editEmp_pagibig").value           = $tr.find('td:eq(12)').html();
                          document.getElementById("editEmp_sss").value               = $tr.find('td:eq(13)').html();
                          document.getElementById("editEmp_tin").value               = $tr.find('td:eq(14)').html();
                          document.getElementById("editEmp_datestarted").value       = $tr.find('td:eq(15)').html();
                          document.getElementById("editEmp_dateofeffectivity").value = $tr.find('td:eq(16)').html();
                          document.getElementById("editEmp_employmentstatus").value  = $tr.find('td:eq(17)').html();
                          document.getElementById("editEmp_employeestatus").value    = employee_status;
                          document.getElementById("editEmp_division").value          = $tr.find('td:eq(19)').html();
                          document.getElementById("editEmp_unit").value              = $tr.find('td:eq(20)').html();
                          document.getElementById("editEmp_posid").value             = $tr.find('td:eq(21)').html();
                          document.getElementById("editEmp_salary").value            = $tr.find('td:eq(22)').html();
                          document.getElementById("editEmp_homeaddress").value       = $tr.find('td:eq(23)').html();
                          document.getElementById("editEmp_email").value             = $tr.find('td:eq(24)').html();
                          document.getElementById("editEmp_contact").value           = $tr.find('td:eq(25)').html();
                          document.getElementById("editEmp_photo").value             = $tr.find('td:eq(26)').html();
                          
                          $('#editEmployeeModal').modal('show');

                      });

                  });

              }else{

                swal("Please select a record. Thanks.", "")

              }

          });

          $("#update-position-form").on("submit",function(e){

            e.preventDefault();
             $('body').loadingModal({
                        text: 'Loading...'
                        });
            $.post("{{ url('updateposition') }}", $("#update-position-form").serialize(), function(data){
                
                  if(data.notify == "Success"){
                      $('body').loadingModal('hide');        
                      swal({
                            title: "Record successfully updated",
                            text: "Message will close in 2 seconds",
                            type: "success",
                            timer: 2000
                          });

                  } else{

                    console.log(data.notify);

                  }

                },"json"); 

          });

          $("#update-division-form").on("submit",function(e){

            e.preventDefault();

            $.post("{{ url('updatedivision') }}", $("#update-division-form").serialize(), function(data){
                
                  if(data.notify == "Success"){
                              
                      swal({
                            title: "Record successfully updated",
                            text: "Message will close in 2 seconds",
                            type: "success",
                            timer: 2000
                          });

                  } else{

                    console.log(data.notify);

                  }

                },"json"); 

          });
          // save changes to particulars table
          $("#update-particular-form").on("submit",function(e){

            e.preventDefault();

            $.post("{{ url('updateparticular') }}", $("#update-particular-form").serialize(), function(data){
                
                  if(data.notify == "Success"){
                              
                      swal({
                            title: "Record successfully updated",
                            text: "Message will close in 2 seconds",
                            type: "success",
                            timer: 2000
                          });

                  } else{

                    console.log(data.notify);

                  }

                },"json"); 

          });

          $("#update-employee-form").on("submit",function(e){

          e.preventDefault();
          $('body').loadingModal({
            text: 'Loading...'
          });
          $.post("{{ url('updateEmployee') }}", $("#update-employee-form").serialize(), function(data){
              
                if(data.notify == "Success"){
                 $('body').loadingModal('hide');            
                    swal({
                          title: "Record successfully updated",
                          text: "Message will close in 2 seconds",
                          type: "success",
                          timer: 2000
                        });

                } else{

                  console.log(data.notify);

                }

              },"json"); 

          });


          //Loan Functions

          $(".btn-submit-loan").click(function(e){
                e.preventDefault();
  
              var approval_val = $(".loan-approval-new").prop('checked');
              /*$('#loan-form input, #loan-form select').each(function() {

                  if( $(this).val() === "" ){
                     swal({
                            title: $(this).attr('name')+" is empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                      //alert($(this).attr('name'));
                     return false;
                  }

              });*/

               if($('#app-for-loan').val() == ''){

                          swal({
                            title: "Application for loan cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else if ($('#date-of-filing').val() == '') {

                         swal({
                            title: "Date of filing cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else if ($('#amount-requested').val() == '') {

                         swal({
                            title: "Amount requested cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else if ($('#loan-terms').val() == '') {

                         swal({
                            title: "Loan terms cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else if ($('#loan-type').val() == '') {

                         swal({
                            title: "Loan type cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else if ($('#mode-payment').val() == '') {

                        swal({
                            title: "Mode of payment cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;


               }else if ($('#member-id').val() == '') {

                         swal({
                            title: "Name of borrower cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else if ($('#comaker-member-id').val() == '') {

                         swal({
                            title: "Name of co-maker cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else if ($('#member-homeaddress').val() == '') {

                         swal({
                            title: "Member home address cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else if ($('#member-age').val() == '') {

                         swal({
                            title: "Member age cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else if ($('#member-dateofbirth').val() == '') {

                         swal({
                            title: "Member date of birth cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else if ($('#member-contactnumber').val() == '') {

                         swal({
                            title: "Member contact number of birth cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else if ($('#member-maritalstatus').val() == '') {

                         swal({
                            title: "Member marital status cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else if ($('#member-status').val() == '') {

                         swal({
                            title: "Member status cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else if ($('#member-type').val() == '') {

                         swal({
                            title: "Member type cannot be empty",
                            text: "Message will close in 5 seconds",
                            type: "error",
                            timer: 5000
                          });
                  return false;

               }else{

                $.post("{{ url('/addloan') }}", $("#loan-form").serialize() + '&approval_status=' + approval_val, function(data){
                        $('body').loadingModal({
                        text: 'Loading...'
                        });
                        if(data.notify=='Success'){  
                        $('body').loadingModal('hide');
                             swal({
                                    title: "Record successfully saved",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });
                             document.getElementById("loan-form").reset();
     
                        } else{
                          console.log(data.notify);
                        }
                    
                    },"json");

               }
               
          });


          $(".edit-loan-details").click(function(e){

                e.preventDefault();
               
                var memberIDchecked;      
                var obj;

                $('.table-loans-content tr.tbl-loans-row').filter(':has(#loan-id-checkbox:checkbox:checked)').each(function() {
                    // this = tr
                    $tr = $(this);
                    $('td', $tr).each(function() {
                        // If you need to iterate the TD's
                        memberIDchecked = $tr.find('td:eq(37)').html();
                    });

                });

                if( memberIDchecked > 0 ){

                $.get("{{ url('/getMemberDetails') }}", { 'memberID': memberIDchecked }, function(data){

                 obj = JSON.parse(data);
                 //console.log(obj.memberDetails.age);
                 document.getElementById("edit-member-homeaddress").value      = obj.memberDetails.home_address;
                 document.getElementById("edit-member-age").value              = obj.memberDetails.age;
                 document.getElementById("edit-member-dateofbirth").value      = obj.memberDetails.date_of_birth;
                 document.getElementById("edit-member-contactnumber").value    = obj.memberDetails.contact_number;
                 document.getElementById("edit-member-maritalstatus").value    = obj.memberDetails.marital_status;
                 
                 //console.log(data);

                 if( obj.loanApproval[0].approval_status == true ){
                 
                  $("input.loan-item-required").prop('disabled', false);
                  $('.loan-approval-2').prop('checked', true);
                  
                 }else{

                  $("input.loan-item-required").prop('disabled', true);
                  $('.loan-approval-2').prop('checked', false);

                 }

                });

                $('.table-loans-content tr.tbl-loans-row').filter(':has(#loan-id-checkbox:checkbox:checked)').each(function() {
                    // this = tr
                    $tr = $(this);
                    $('td', $tr).each(function() {
                        // If you need to iterate the TD's
                        
                        document.getElementById("loan-primaryID").value           = $tr.find('td:eq(1)').html();
                        document.getElementById("edit-app-for-loan").value        = $tr.find('td:eq(6)').html();
                        document.getElementById("edit-date-of-filing").value      = $tr.find('td:eq(7)').text();
                        document.getElementById("edit-amount-requested").value    = $tr.find('td:eq(9)').text();
                        document.getElementById("edit-loan-terms").value          = $tr.find('td:eq(10)').html();
                        document.getElementById("edit-loan-type").value           = $tr.find('td:eq(11)').text();
                        document.getElementById("edit-mode-payment").value        = $tr.find('td:eq(41)').text();
                        document.getElementById("edit-member-id").value           = $tr.find('td:eq(37)').html();
                        document.getElementById("edit-comaker-member-id").value   = $tr.find('td:eq(38)').html();
                        document.getElementById("edit-member-status").value       = $tr.find('td:eq(39)').html();
                        document.getElementById("edit-member-type").value         = $tr.find('td:eq(14)').html();
                        document.getElementById("edit-amount-granted").value      = $tr.find('td:eq(15)').html();
                        document.getElementById("edit-interest").value            = $tr.find('td:eq(16)').html();
                        document.getElementById("edit-service-fee").value         = $tr.find('td:eq(17)').html();
                        document.getElementById("edit-clpp-insurance").value      = $tr.find('td:eq(18)').html();
                        document.getElementById("edit-filing-fee").value          = $tr.find('td:eq(19)').html();
                        document.getElementById("edit-notarial-fee").value        = $tr.find('td:eq(20)').html();
                        document.getElementById("edit-life-insurance").value      = $tr.find('td:eq(21)').html();
                        document.getElementById("edit-cbu").value                 = $tr.find('td:eq(22)').html();
                        document.getElementById("edit-savings").value             = $tr.find('td:eq(23)').html();
                        document.getElementById("edit-other").value               = $tr.find('td:eq(25)').html();
                        document.getElementById("edit-total-deduction").value     = $tr.find('td:eq(26)').html();
                        document.getElementById("edit-net-proceed").value         = $tr.find('td:eq(27)').html();
                        document.getElementById("edit-loan-balance").value        = $tr.find('td:eq(24)').html();
                        document.getElementById("edit-amortization").value        = $tr.find('td:eq(42)').html();
                        document.getElementById("edit-date-start").value          = $tr.find('td:eq(40)').html();
                        document.getElementById("edit-unit").value                = $tr.find('td:eq(31)').html();
                        document.getElementById("edit-computedby").value          = $tr.find('td:eq(32)').html();
                        document.getElementById("edit-certifiedby").value         = $tr.find('td:eq(33)').html();

                        $('#editLoanModal').modal('show');

                    });

                });

              } else{ 

                swal("Please select a record. Thanks.", "")

              }

          });

          $(".add-payments-details").click(function(e){

                e.preventDefault();
               
                var loanIDchecked;  
                var amortID;  
                var memberIDchecked;     
                var bill_id;     
                var obj;

                var valArray = [];      

                  
                $(".bill-id-checkbox:checkbox:checked").each(function(i){
                  valArray[i] = $(this).val();
                });

                if( valArray > 0 ){

                $('.table-bills-content tr.tbl-bills-row').filter(':has(#bill-id-checkbox:checkbox:checked)').each(function() {
                    
                    $tr = $(this);
                    $('td', $tr).each(function() {

                        // If you need to iterate the TD's
                        loanIDchecked   = $tr.find('td:eq(2)').html();
                        memberIDchecked = $tr.find('td:eq(3)').html();
                        amortID         = $tr.find('td:eq(4)').html();

                        if( $tr.find('td:eq(18)').text() ){

                          swal({
                            title:"Payment exist.",
                            type: "warning",
                            timer: 5000
                          });

                          $('#addPaymentModal').modal('hide',true);
         
                        }

                        document.getElementById("payment_amortization").value = $tr.find('td:eq(16)').text();
                        document.getElementById("bill_id").value = $tr.find('td:eq(1)').html();
                        document.getElementById("bill-schedule-id").value = $tr.find('td:eq(5)').html();
                    });

                });

                if( loanIDchecked > 0 ){

                    $.get("{{ url('/getLoanDetails') }}", { 'memberID': memberIDchecked,'loanID': loanIDchecked}, function(data){

                     obj = JSON.parse(data);
                     document.getElementById("add-loan-id").value    = obj.amortizations[0].loan_id;
                     document.getElementById("add-member-id").value  = $tr.find('td:eq(3)').html();
                     document.getElementById("first-name").value     = obj.memberDetails.fname;
                     document.getElementById("middle-name").value    = obj.memberDetails.mname;
                     document.getElementById("last-name").value      = obj.memberDetails.lname;
                     document.getElementById("extension").value      = obj.memberDetails.extension;
                     document.getElementById("loan_type_payment").value     = obj.loanDetails.loan_type;
                     
                    
                      $('#schedule_payment').empty();

                      $.each(obj.amortizations, function (i, item) {

                        if( item.payment_status == true ){

                          $('#schedule_payment').append($('<option style="background-color:green; color:#fff;" disabled>').attr('value', item.schedule).text(item.schedule+" ------- Paid"));

                         }else{

                          document.getElementById("schedule_payment").value = $tr.find('td:eq(5)').text();
                          $('#schedule_payment').append($('<option style="color:red">').attr('value', item.schedule).text(item.schedule));

                         }

                      });
  
                     $('#addPaymentModal').modal('show');

                    });

                  }else{ 

                    swal("Please select a record. Thanks.", "")

                  }

               }else{

                swal("Please select 1 record only. Thanks.", "")

              }

          });


          function compareBillDate(){

            var user_schedule = $('#schedule_payment').val();
            var real_schedule = $('#bill-schedule-id').val();

            if( real_schedule == user_schedule ){
              document.getElementById("btn-payment-submit").disabled = false;
            }else{
              document.getElementById("btn-payment-submit").disabled = true;
              swal({
                    title:" Wrong bill date. Can't submit.",
                    text: "Please change date to "+real_schedule,
                    type: "warning",
                    timer: 5000
                  });
            }
            
          }

          function getAmortizationAmount()
          {
              var schedule = $('#schedule_payment').val();
              var loan_id  = $('#add-loan-id').val();

              $.get("{{ url('/getAmortizationAmount') }}", { 'schedule': schedule,'loan_id': loan_id}, function(data){

                     obj = JSON.parse(data);
                     console.log(obj);
                     document.getElementById("payment_amortization").value    = obj.amortizations[0].loan_amortization;
                     document.getElementById("bill_id").value    = obj.bill[0].id;

                });
          }


          function numberWithCommas(x) {
              return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
          }


          function getRBC(){
    
                var amortID;  
                var loanIDchecked;
                var paymentAmount = $("#payment_amount").val();             

                $('.table-bills-content tr.tbl-bills-row').filter(':has(#bill-id-checkbox:checkbox:checked)').each(function() {
                    
                      $tr = $(this);

                      $('td', $tr).each(function() {

                          loanIDchecked = $tr.find('td:eq(2)').html();
                          amortID = $tr.find('td:eq(4)').html();

                      });

                      
                      if(loanIDchecked){

                      $.get("{{ url('/getRBC') }}", { 'loanID': loanIDchecked }, function(data){

                         obj = JSON.parse(data);
                         console.log(obj.rbMax);

                         if( obj.rbcAmount ){

                            if( +paymentAmount > +obj.rbcAmount ){

                            swal({
                                title:"Amount is greater than the payment balance. ",
                                text: "Remaining balance is "+numberWithCommas(obj.rbcAmount)+" only",
                                type: "warning",
                                timer: 10000
                              });

                            document.getElementById("btn-payment-submit").disabled = true;

                            }else{

                              document.getElementById("btn-payment-submit").disabled = false;

                            }

                         }else if( +paymentAmount > +obj.rbMax ){

                          swal({
                              title:"Amount is greater than the payment balance. ",
                              text: "Remaining balance is "+numberWithCommas(obj.rbMax)+" only",
                              type: "warning",
                              timer: 10000
                            });

                          document.getElementById("btn-payment-submit").disabled = true;

                         }else{

                          console.log(obj.rbcAmount);
                          document.getElementById("btn-payment-submit").disabled = false;
                         
                         }
                       
                      });

                      }else{

                        alert("Error: No amortization id found");

                      }

                });

              }
  

          $(".btn-update-loan").click(function(e){

             e.preventDefault();
              $('body').loadingModal({
                        text: 'Loading...'
                        });

             var approval = $(".loan-approval-2").prop('checked');

             $.post("{{ url('/updateloan') }}", $("#edit-loan-form").serialize() + '&approval_status=' + approval, function(data){

                        if(data.notify=='Success'){  
                          $('body').loadingModal('hide');
                             swal({
                                    title: "Loan details successfully updated",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });
     
                        } else{
                          console.log(data.notify);
                        }
                    
             },"json");

          });


          $('.loan-approval-1').on('change', function () {

            var loan_approval = $(this).prop('checked');
            var postdata;

            if(loan_approval == true){

              $.post("{{ url('/updateLoanApprovalStatus') }}", $("#approval-switch").serialize() + '&id=' + $(this).val() + '&approval_status=' + "true", function(data){
                        console.log(data.notify);
                        if(data.notify=='Success'){  
                           console.log(data.notify);
                             swal({
                                    title: "Loan approval set to true",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });
     
                        } else{
                          console.log(data.notify);
                        }
                    
             },"json");

            $("input.loan-item-required").prop('disabled', false);
            $('.loan-approval-2').prop('checked', true); 

            }else{

              $.post("{{ url('/updateLoanApprovalStatus') }}", $("#approval-switch").serialize() + '&id=' + $(this).val() + '&approval_status=' + "false", function(data){
                        console.log(data.notify);
                        if(data.notify=='Success'){  
                           console.log(data.notify);
                             swal({
                                    title: "Loan approval set to false",
                                    text: "Message will close in 2 seconds",
                                    type: "success",
                                    timer: 2000
                                  });
     
                        } else{
                          console.log(data.notify);
                  }
                    
              },"json");

              $("input.loan-item-required").prop('disabled', true);
              $('.loan-approval-2').prop('checked', false);

            }

          });


          $('.loan-approval-new').on('change', function () {

            var loan_approval = $(this).prop('checked');
            
            if(loan_approval == true){
              $("input.loan-item").prop('disabled', false);
            }else{
              $("input.loan-item").prop('disabled', true);
            }

          });

          $('.loan-approval-2').on('change', function () {

            var loan_approval = $(this).prop('checked');
            
            if(loan_approval == true){
              $("input.loan-item-required").prop('disabled', false);
            }else{
              $("input.loan-item-required").prop('disabled', true);
            }

          });


          function calculateLoan(){

              var loanType = $("#loan-type").val();
              var amountGranted = $("#amount-granted").val();
              var loanTerms = $("#loan-terms").val();
              var modePayment = $("#mode-payment").val();
              var interest_amount = 0;
              var interest = 0;
              var clpp_insurance = 0;
              var life_insurance = 0;
              var filing_fee = $("#filing-fee").val();
              var notarial_fee = $("#notarial-fee").val();
              var savings = $("#savings").val();
              var others = $("#other").val();
              var amortization = 0;
              var serviceFee = 0;
              var CBU = 0;
              var educArray = [];
                  educArray[1]=3, educArray[2]=2, educArray[3]=1, educArray[4]=12, educArray[5]=11, educArray[6]=10, educArray[7]=9, 
                  educArray[8]=8, educArray[9]=7, educArray[10]=6, educArray[11]=5, educArray[12]=4;

              if( loanType == "Salary" ){

                interest_amount = (amountGranted*0.02)*(loanTerms/2);
                amortization = (+amountGranted + +interest_amount)/(loanTerms*2);
                serviceFee = amountGranted*0.05
                CBU = amountGranted*0.02
                document.getElementById("interest").value = interest_amount.toFixed(2);
                document.getElementById("service-fee").value = serviceFee.toFixed(2);
                document.getElementById("cbu").value = CBU.toFixed(2);
                document.getElementById("amortization").value = amortization.toFixed(2);
                clpp_insurance = $("#clpp-insurance").val();
                life_insurance = $("#life-insurance").val();
                document.getElementById("total-deduction").value = +interest_amount + +serviceFee + +CBU + +clpp_insurance + +life_insurance + +filing_fee + +notarial_fee + +savings + +others;
                document.getElementById("net-proceed").value = amountGranted-serviceFee-CBU-interest_amount-clpp_insurance-life_insurance-filing_fee-notarial_fee-savings-others;
                document.getElementById("loan-balance").value = +amountGranted + +interest_amount;


              }else if ( loanType == "Hospitalization" || loanType == "Emergency" || loanType == "Pension" || loanType == "Personal" || loanType == "Others") {

                interest_amount = (+amountGranted*0.02)*(loanTerms/2);
                amortization = (+amountGranted + +interest_amount)/(loanTerms*2);
                serviceFee = +amountGranted*0.05
                CBU = +amountGranted*0.02
                document.getElementById("interest").value = interest_amount.toFixed(2);
                document.getElementById("service-fee").value = serviceFee.toFixed(2);
                document.getElementById("cbu").value = CBU.toFixed(2);
                document.getElementById("amortization").value = amortization.toFixed(2);
                clpp_insurance = $("#clpp-insurance").val();
                life_insurance = $("#life-insurance").val();
                document.getElementById("total-deduction").value = +interest_amount + +serviceFee + +CBU + +clpp_insurance + +life_insurance + +filing_fee + +notarial_fee + +savings + +others;
                document.getElementById("net-proceed").value = amountGranted-serviceFee-CBU-interest_amount-clpp_insurance-life_insurance-filing_fee-notarial_fee-savings-others;
                document.getElementById("loan-balance").value = +amountGranted + +interest_amount;

               }else if( loanType == "Educational" ){

                clpp_insurance = $("#clpp-insurance").val();
                life_insurance = $("#life-insurance").val();
                cbu_val = $("#cbu").val();
                $userDate = new Date($("#starting_date").val());

                $finalDate = $userDate.getMonth()+1; 
                interest_amount = ((amountGranted*0.02) * educArray[$finalDate])/2;
                amortization = (+amountGranted + +interest_amount)/(loanTerms*2);
                serviceFee = 100;
          
                document.getElementById("interest").value = interest_amount.toFixed(2);
                document.getElementById("service-fee").value = serviceFee.toFixed(2);
                document.getElementById("amortization").value = amortization.toFixed(2);
                
                document.getElementById("total-deduction").value = +interest_amount + +serviceFee + +cbu_val + +clpp_insurance + +life_insurance + +filing_fee + +notarial_fee + +savings + +others;
                document.getElementById("net-proceed").value = amountGranted-serviceFee-cbu_val-interest_amount-clpp_insurance-life_insurance-filing_fee-notarial_fee-savings-others;
                document.getElementById("loan-balance").value = +amountGranted + +interest_amount;

              }else{
                
                interest_amount = (+amountGranted*0.02)*loanTerms;
                amortization = (+amountGranted + +interest_amount)/loanTerms;
                serviceFee = amountGranted*0.05
                CBU = amountGranted*0.02
                document.getElementById("interest").value = interest_amount.toFixed(2);
                document.getElementById("service-fee").value = serviceFee.toFixed(2);
                document.getElementById("cbu").value = CBU.toFixed(2);
                document.getElementById("amortization").value = amortization.toFixed(2);
                clpp_insurance = $("#clpp-insurance").val();
                life_insurance = $("#life-insurance").val();
                document.getElementById("total-deduction").value = +interest_amount + +serviceFee + +CBU + +clpp_insurance + +life_insurance + +filing_fee + +notarial_fee + +savings + +others;
                document.getElementById("net-proceed").value = amountGranted-serviceFee-CBU-interest_amount-clpp_insurance-life_insurance-filing_fee-notarial_fee-savings-others;
                document.getElementById("loan-balance").value = +amountGranted + +interest_amount;

              }

          }

          function dateSeqChecker(chkbox,amort_id,loan_id,loan_schedule){

            if(chkbox.checked == true){

            $.get("{{ url('getStartSchedule') }}", { 'loan_id':loan_id, 'amort_id':amort_id }, function(data){

              obj = JSON.parse(data);

              /*console.log(obj.id_sequence);
              console.log(obj.schedule[0]['schedule']);
              console.log(obj.payment_status[0]['payment_status']);*/
              
              if(obj.payment_status[0]['payment_status'] == true){

                       swal({
                            title:"Payment exist.",
                            type: "warning",
                            timer: 5000
                          });

                   document.getElementById('payment-btn').disabled = true;

              }else if( amort_id == obj.id_sequence ){
 
                   document.getElementById('payment-btn').disabled = false;

              }else{

                swal({
                          title: "Advance date selected. Next date should be "+obj.schedule[0]['schedule'],
                          text: "Payment not allowed",
                          type: "warning",
                          timer: 5000
                    });

                   document.getElementById('payment-btn').disabled = true;

                  }
              
               });

            }else{

            console.log(chkbox);

          }

      }

   
          $(".generate").click(function() {

              var $row = $(this).closest("tr"),
                  $tds = $row.find("td:nth-child(4) a.btn-showAmort").removeClass("disabled");
                  $tds = $row.find("td:nth-child(3) a.generate").addClass("disabled");

              $.each($tds, function() {
                  console.log($(this).text());
              });
          });


        function generateSchedule( id, loan_type ){

              var txt_url;           

              if( loan_type == "Business" ){
                txt_url = 'addamortbusinessloan'; 
              }else{
                txt_url = 'addamortization';
              }

              $('body').loadingModal({text: 'Loading...'});

              var base_url="http://localhost:8000/";

              $.post( base_url+txt_url, {'loanId':id}, function(data){

                if(data.notify=='Success'){

                   $('body').loadingModal('hide'); 
                      
                   swal({
                          title: "Schedule successfully generated",
                          text: "Message will close in 2 seconds",
                          type: "success",
                          timer: 2000
                        });

              } else{

                console.log(data.notify);

              }

           },"json");

        }


          function editCalculateLoan(){

              var loanType = $("#edit-loan-type").val();
              var amountGranted = $("#edit-amount-granted").val();
              var loanTerms = $("#edit-loan-terms").val();
              var modePayment = $("#edit-mode-payment").val();
              var interest_amount = 0;
              var interest = 0;
              var clpp_insurance = 0;
              var life_insurance = 0;
              var filing_fee = $("#edit-filing-fee").val();
              var notarial_fee = $("#edit-notarial-fee").val();
              var savings = $("#edit-savings").val();
              var others = $("#edit-other").val();
              var amortization = 0;
              var serviceFee = 0;
              var CBU = 0;

              if( loanType == "Salary" ){

                interest_amount = (amountGranted*0.05)*(loanTerms/2);
                amortization = (+amountGranted + +interest_amount)/(loanTerms*2);
                serviceFee = amountGranted*0.02
                CBU = amountGranted*0.02
                document.getElementById("edit-interest").value = interest_amount.toFixed(2);
                document.getElementById("edit-service-fee").value = serviceFee.toFixed(2);
                document.getElementById("edit-cbu").value = CBU.toFixed(2);
                document.getElementById("edit-amortization").value = amortization.toFixed(2);
                clpp_insurance = $("#edit-clpp-insurance").val();
                life_insurance = $("#edit-life-insurance").val();
                document.getElementById("edit-total-deduction").value = +interest_amount + +serviceFee + +CBU + +clpp_insurance + +life_insurance + +filing_fee + +notarial_fee + +savings + +others;
                document.getElementById("edit-net-proceed").value = amountGranted-serviceFee-CBU-interest_amount-clpp_insurance-life_insurance-filing_fee-notarial_fee-savings-others;
                document.getElementById("edit-loan-balance").value = +amountGranted + +interest_amount;


              }else if ( loanType == "Hospitalization" || loanType == "Emergency" || loanType == "Pension" || loanType == "Personal" || loanType == "Others") {

                interest_amount = (amountGranted*0.02)*(loanTerms/2);
                amortization = (+amountGranted + +interest_amount)/(loanTerms*2);
                serviceFee = amountGranted*0.02
                CBU = amountGranted*0.02
                document.getElementById("edit-interest").value = interest_amount.toFixed(2);
                document.getElementById("edit-service-fee").value = serviceFee.toFixed(2);
                document.getElementById("edit-cbu").value = CBU.toFixed(2);
                document.getElementById("edit-amortization").value = amortization.toFixed(2);
                clpp_insurance = $("#edit-clpp-insurance").val();
                life_insurance = $("#edit-life-insurance").val();
                document.getElementById("edit-total-deduction").value = +interest_amount + +serviceFee + +CBU + +clpp_insurance + +life_insurance + +filing_fee + +notarial_fee + +savings + +others;
                document.getElementById("edit-net-proceed").value = amountGranted-serviceFee-CBU-interest_amount-clpp_insurance-life_insurance-filing_fee-notarial_fee-savings-others;
                document.getElementById("edit-loan-balance").value = +amountGranted + +interest_amount;

               }else{

                return false;

              }
          }

          $("#add-member-code").change(function(e){

                e.preventDefault();
                var memberID = $(this).val();
                var obj;
               
                $.get("{{ url('/compareMemberId') }}", { 'memberID': memberID }, function(data){

                  obj = JSON.parse(data);

                      if( obj.notify == 'Success' ){ 

                        $(".member-tag").prop('disabled', true);

                             swal({
                                    title:memberID+" member id already exist.",
                                    text: "Message will close in 5 seconds",
                                    type: "warning",
                                    timer: 5000
                                  });
     
                        } else{
                          $(".member-tag").prop('disabled', false);
                          console.log(obj.notify);
                        }

                });

          });

          $(".add_payee_name").change(function(e){

                e.preventDefault();
                var payee_name = $(this).val();
                var obj;
               
                $.get("{{ url('/getpayee') }}", { 'payee_name': payee_name }, function(data){

                  obj = JSON.parse(data);
                     $('#address').val(obj.address);
                });

          });

          $("#member-id").change(function(e){
      
                e.preventDefault();
                var memberID = $(this).val();
                var obj;
               
                $.get("{{ url('/getMemberDetails') }}", { 'memberID': memberID }, function(data){

                 obj = JSON.parse(data);
                 //console.log(obj.memberDetails.age);
                 document.getElementById("member-homeaddress").value = obj.memberDetails.home_address;
                 document.getElementById("member-age").value = obj.memberDetails.age;
                 document.getElementById("member-dateofbirth").value = obj.memberDetails.date_of_birth;
                 document.getElementById("member-contactnumber").value = obj.memberDetails.contact_number;
                 document.getElementById("member-maritalstatus").value = obj.memberDetails.marital_status;
                 document.getElementById("member-id-holder").value = obj.memberDetails.member_code;
 
                });

           });

          $("#edit-member-id").change(function(e){
      
                e.preventDefault();
                var memberID = $(this).val();
                var obj;
               
                $.get("{{ url('/getMemberDetails') }}", { 'memberID': memberID }, function(data){

                 obj = JSON.parse(data);
                 //console.log(obj.memberDetails.age);
                 document.getElementById("edit-member-homeaddress").value = obj.memberDetails.home_address;
                 document.getElementById("edit-member-age").value = obj.memberDetails.age;
                 document.getElementById("edit-member-dateofbirth").value = obj.memberDetails.date_of_birth;
                 document.getElementById("edit-member-contactnumber").value = obj.memberDetails.contact_number;
                 document.getElementById("edit-member-maritalstatus").value = obj.memberDetails.marital_status;
 
                });

           });


</script>