<table class="table table-borderless">

<?php $tempArray = []; ?>

    @foreach ($loanDetails as $loan)
        
        <thead>

            <tr style="text-align:justify;">
                <th>FPPI ARB MPC</th>
            </tr>

            <tr style="text-align:justify;">
                <th>P-6 BAYUGAN 2 SFADS</th>
                <th></th>
                <th>LOAN AMOUNT</th>
                <th>{{ $loan->amount_granted }}</th>
            </tr>

            <tr style="text-align:justify;">
                <th>NAME OF BORROWER: </th>
                <th>{{ $loan->member->fname.' '.$loan->member->lname }}</th>
                <th>SERVICE FEE</th>
                <th>{{ $loan->service_fee }}</th>
            </tr>

            <tr style="text-align:justify;">
                <th>ADDRESS </th>
                <th>{{ $loan->member->home_address }}</th>
                <th>Interest</th>
                <th>{{ $loan->interest }}</th>
            </tr>

            <tr style="text-align:justify;">
                <th>LOAN AMOUNT </th>
                <th></th>
                <th>Insurance</th>
                <th></th>
            </tr>

             <tr style="text-align:justify;">
                <th>TERMS</th>
                <th>{{ $loan->terms }}</th>
                <th>LIFE INSURANCE</th>
                <th>{{ $loan->life_insurance }}</th>
            </tr>

            <tr style="text-align:justify;">
                <th>DATE RELEASE</th>
                <th></th>
                <th>CBU</th>
                <th>{{ $loan->cbu }}</th>
            </tr>

            <tr style="text-align:justify;">
                <th></th>
                <th></th>
                <th>NET PROCEEDS</th>
                <th>{{ $loan->net_proceed }}</th>
            </tr>

        </thead>
        @endforeach

</table>


<table class="table table-bordered">

    <thead>
        <tr style="text-align:justify;">
          <th>#</th>
          <th>Payment</th>
          <th>Amortization</th>
          <th>Balance</th>
          <th>Interest</th>
          <th>Loan Amort.</th>
          <th>Balance</th>
        </tr>
    </thead>

    <tbody>
            @for ($i = 0; $i <= $loan->terms; $i++)
             <tr>
                <td>{{ $i == "0" ? " " : $i }}</td>
                <td></td>
                <td></td>
                <td>{{ $i == "0" ? $loan->amount_granted : " " }}</td>
                <td>{{ $i == "0" ? $loan->interest : " " }}</td>
                <td>{{ $i == "0" ? " " : $loan->amortization }}</td>
                
                <?php 

                if( $i == 0 ){

                    $tempArray[$i] = $loan->loan_balance;
                }
                else{

                    $tempArray[$i] = $tempArray[$i-1]-$loan->amortization;
                } 

                ?>   
                                
                <td>{{ $i == "0" ? $loan->loan_balance : $tempArray[$i] }}</td>
             </tr>
            @endfor
     </tbody>

 </table>


 <table class="table table-borderless">

    <thead>
        <tr style="text-align:justify;">
          <th>Prepared by:</th>     
          <th>Checked by:</th>     
          <th>Noted by:</th>
        </tr>
    </thead>

     <tbody>
        <tr>
         <td></td>
         <td></td>
         <td></td>
        </tr>

        <tr>
         <td></td>
         <td></td>
         <td></td>
        </tr>

        <tr>
         <td>JEACYLL B. KISTADIO</td>
         <td>MARGIE L.SEPRADO</td>
         <td>JOSEPHINE B. PALEN</td>
        </tr>

        <tr>
         <td>LOAN CLERK</td>
         <td>BOOKKEEPER</td>
         <td>MANAGER</td>
        </tr>
     </tbody>

 </table>