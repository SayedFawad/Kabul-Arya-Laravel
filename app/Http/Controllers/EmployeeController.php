<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Session;
use DB;
use Redirect;
use File;
use mysql_connect;


class EmployeeController extends BaseController
{
    
        public function check()
        {
          if(session()->has('session_login'))
          {
                $infoVar = DB::table('employee')->get();
                $data = array('infoTest'=>$infoVar);
                return view('employee.infoPage',$data);
          }
          else
          {
            return Redirect('login');
          }
        }




        public function sessionOut()
        {
          session()->forget('session_login');
          return redirect('login');
        }




    public function checkC()
        {
          if(session()->has('session_login'))
          {
                

                 $Vartbl = DB::table('main')->get();
                $data = array('tableVar'=>$Vartbl);

                $Vartbl1 = DB::table('producttable')->get();
                $data1 = array('tableVar1'=>$Vartbl1);

                $Vartbl2 = DB::table('abouttbl')->get();
                $data2 = array('tableVar2'=>$Vartbl2);


                $cs = DB::table('account')
                ->where('ID','<>',4)
                ->get();
                $dt = array('custom'=>$cs);

              


                return view('kabularyaFolder.manage',$dt);
            
          }
          else
          {
            return Redirect('login');
          }
        }



   public function check_admin()
        {
          if(session()->has('session_login'))
          {
                

                 $Vartbl = DB::table('main')->get();
                $data = array('tableVar'=>$Vartbl);

              
                return view('kabularyaFolder.main_admin',$data);
            
          }
          else
          {
            return Redirect('login');
          }
        }


           public function check_product_admin()
        {
          if(session()->has('session_login'))
          {
                

                 $Vartbl = DB::table('producttable')->paginate(6);
                $data = array('tableVar'=>$Vartbl);

              
                return view('kabularyaFolder.product_admin',$data);
            
          }
          else
          {
            return Redirect('login');
          }
        }


              public function check_about_admin()
        {
          if(session()->has('session_login'))
          {
                

                 $Vartbl = DB::table('abouttbl')->get();
                $data = array('tableVar'=>$Vartbl);

              
                return view('kabularyaFolder.about_admin',$data);
            
          }
          else
          {
            return Redirect('login');
          }
        }




public function check_account()
        {
          if(session()->has('session_login'))
          {
                

                 $Vartbl = DB::table('account')->get();
                $data = array('tableVar'=>$Vartbl);

              
                return view('kabularyaFolder.account',$data);
            
          }
          else
          {
            return Redirect('login');
          }
        }



     public function insert_account()
      {

         if(session()->has('session_login'))
          {
            return view('kabularyaFolder.insert_account');
          }
          else
          {
            return redirect('login');
          }
      }






   public function save_account(Request $req)
      {        
 
            


             
           
             $name = $req->Input('Name');
             $description = $req->Input('Description');
             $address = $req->Input('Address');
             $phone = $req->Input('Phone');
            
            

            
            
                 //not exists enter new
                $data = array('Name'=>$name,
                          'Description'=>$description,
                          'Address'=>$address,
                          'Phone'=>$phone
                          );
              
                 DB::table('account')->insert($data);
                 Session::flash('success','You successfully add new account');
                 return Redirect('account');
               
                
            
      }


 public function edit_account($ID)
      {

        if(session()->has('session_login'))
        {
         $info=DB::table('account')->where('ID',$ID)->first();
         $data = array('varTbl'=>$info);
         return view('kabularyaFolder.edit_account',$data);
        }
        else
        {
          return redirect('login');
        }
      }


public function update_account(Request $req,$ID)
     {
             $ID = $req->ID;
             $Name = $req->Name;
             $Description = $req->Description;
             $Address = $req->Address;
             $Phone = $req->Phone;
             

          
            $data = array('Name'=>$Name,
                          'Description'=>$Description,
                          'Address'=>$Address,
                          'Phone'=>$Phone
                          );

            DB::table('account')->where('ID',$ID)->update($data);
            return Redirect('account');
     }

   public function delete_account($ID)
     {

      if(session()->has('session_login'))
      {
       
       DB::table('account')->where('ID',$ID)->delete();
      
       return Redirect::Back();
      }
      else
      {
        return redirect('login');
      }

     }



public function sayed_moh_shah()
        {
          if(session()->has('session_login'))
          {
                

                 $Vartbl = DB::table('money_received')
                 ->join('account','money_received.AccountID','=','account.ID')
                 ->select('money_received.*','account.Name')
                 ->where('ReceivedBy','=','Said Moh Shah')
                 ->where('Finished_Sayed_Moh_Shah','=','Not')->get();
                $data = array('tableVar'=>$Vartbl);



                $Vartbl2 = DB::table('money_received')
                ->select(DB::raw('ReceivedBy,SUM(Amount) As Amount'))
                ->groupBy('ReceivedBy')
                ->where('Finished_Sayed_Moh_Shah','=','Not')
                ->where('ReceivedBy','=','Said Moh Shah')->first();
                
                
                $Amt = DB::table('said_moh_shah_pomade')
                ->select(DB::raw('balance'))
                ->orderBy('ID','desc')
                ->first();


                 $Vartbl3 = DB::table('expenses')
                 ->where('Finished','=','Not')
                 ->where('AccountID','=',4)->get();

                  $Vartbl4 = DB::table('expenses')
                ->join('account','expenses.AccountID','=','account.ID')
                ->select(DB::raw('account.Name,SUM(expenses.Amount) As Amount'))
                ->groupBy('account.Name')
                ->where('Finished','=','Not')
                ->where('AccountID','=',4)->first();

                $saved_pomade = DB::table('said_moh_shah_pomade')->orderBy('ID','desc')->limit(1)->get();




                //displays only five recent credit and debit transaction of Said Moh Shah:
                $VarPreCr = DB::table('money_received')
                 ->join('account','money_received.AccountID','=','account.ID')
                 ->select('money_received.*','account.Name')
                 ->where('ReceivedBy','=','Said Moh Shah')
                 ->where('Finished_Sayed_Moh_Shah','=','Yes')->orderBy('ID','desc')->limit(5)->get();

                 $VarPreDe = DB::table('expenses')
                 ->where('Finished','=','Yes')
                 ->where('AccountID','=',4)->orderBy('ID','desc')->limit(5)->get();


                

                 $count = ($Amt->balance + $Vartbl2->Amount - $Vartbl4->Amount);

                
                $data3 = array(
                  'Var'=>$Vartbl3,
                  'tableVar2'=>$Vartbl2,
                  'Var4'=>$Vartbl4,
                  'result'=>$count,
                  'saved_pomad'=>$saved_pomade,
                  'PreCr'=>$VarPreCr,
                  'PreDe'=>$VarPreDe
                  );

              
                return view('kabularyaFolder.sayed_moh_shah',$data,$data3);
            
          }
          else
          {
            return Redirect('login');
          }
        }

public function completedMoh(Request $req,$ID)
        {
          if(session()->has('session_login'))
          {
                

             $ID = $req->ID;
             $finished = $req->finished;
           

          
            $data = array('Finished_Sayed_Moh_Shah'=>$finished
                          );

            DB::table('money_received')->where('ID',$ID)->update($data);
            return Redirect('sayed_moh_shah');

            
          }
          else
          {
            return Redirect('login');
          }
        }


public function completedMoh_expenses(Request $req,$ID)
        {
          if(session()->has('session_login'))
          {
                

             $ID = $req->ID;
             $finished = $req->finished;
           

          
            $data = array('Finished'=>$finished
                          );

            DB::table('expenses')->where('ID',$ID)->update($data);
            return Redirect('sayed_moh_shah');

            
          }
          else
          {
            return Redirect('login');
          }
        }


public function save_said_moh_pomade(Request $req)
        {
          if(session()->has('session_login'))
          {
                


            $Vartbl = DB::table('money_received')
                 ->join('account','money_received.AccountID','=','account.ID')
                 ->select('money_received.*','account.Name')
                 ->where('ReceivedBy','=','Said Moh Shah')
                 ->where('Finished_Sayed_Moh_Shah','=','Not')->orderBy('money_received.ID','desc')->first();
                



                  $Vartbl4 = DB::table('expenses')
                ->join('account','expenses.AccountID','=','account.ID')
                ->select('expenses.*','account.ID')
                ->where('Finished','=','Not')
                ->where('AccountID','=',4)->orderBy('expenses.ID','desc')->first();


                $amount_cr = DB::table('money_received')
                ->select(DB::raw('SUM(Amount) As Amount'))
                ->groupBy('ReceivedBy')
                ->where('Finished_Sayed_Moh_Shah','=','Not')
                ->where('ReceivedBy','=','Said Moh Shah')->first();

                $amount_dt = DB::table('expenses')
                ->join('account','expenses.AccountID','=','account.ID')
                ->select(DB::raw('SUM(expenses.Amount) As Amount1'))
                ->groupBy('account.Name')
                ->where('Finished','=','Not')
                ->where('AccountID','=',4)->first();

                 $previous = DB::table('said_moh_shah_pomade')
                 ->orderBy('ID','desc')
                 ->limit(1)
                 ->first();
            
 
                 $balance = ((int)$previous->balance + (int)$amount_cr->Amount - (int)$amount_dt->Amount1);
                 

                 //also account said moh shah should be completed  cr and dt
                 $ended = array(
                       'Finished_Sayed_Moh_Shah'=>'Yes'
                  );

             DB::table('money_received')->where('Amount','<>','0')->update($ended);    


                $ended_exp = array(
                       'Finished'=>'Yes'
                  );

             DB::table('expenses')->where('Amount','<>','0')->update($ended_exp); 


             
             $date = $req->Input('date');
           

          
            $data = array('date'=>$date,
                          'paid_by'=> $Vartbl->Name,
                          'credit'=>$Vartbl->Amount,
                          'cr_description'=>$Vartbl->Description,
                          'cr_date'=>$Vartbl->Date,
                          'debit'=>$Vartbl4->Amount,
                          'de_description'=>$Vartbl4->Description,
                          'de_date'=>$Vartbl4->Date,
                          'balance'=>$balance
              );

            DB::table('said_moh_shah_pomade')->insert($data);
            return Redirect('sayed_moh_shah');

            
          }
          else
          {
            return Redirect('login');
          }
        }


public function all_pomade_sayed_moh_shah()
        {
          if(session()->has('session_login'))
          {
                

              



            

         



                //displays only five recent credit and debit transaction of Said Moh Shah:
                $VarPreCr = DB::table('money_received')
                 ->join('account','money_received.AccountID','=','account.ID')
                 ->select('money_received.*','account.Name')
                 ->where('ReceivedBy','=','Said Moh Shah')
                 ->where('Finished_Sayed_Moh_Shah','=','Yes')->orderBy('ID','desc')->get();

                 $VarPreDe = DB::table('expenses')
                 ->where('Finished','=','Yes')
                 ->where('AccountID','=',4)->orderBy('ID','desc')->get();


                



                
                $data3 = array(
                 
                  'PreCr'=>$VarPreCr,
                  'PreDe'=>$VarPreDe
                  );

              
                return view('kabularyaFolder.all_pomade_sayed_moh_shah',$data3);
            
          }
          else
          {
            return Redirect('login');
          }
        }








//customer pomade account

  public function pomade_customer(Request $req)
        {
          if(session()->has('session_login'))
          {
                

             
             $ID = $req->Input('customers');
             


            //name customer
            $name = DB::table('account')
            ->select('Name')
            ->where('ID',$ID)
            ->get();

            
             

              //debit of customers   -  money received   - onging transaction
                $Vartbl = DB::table('money_received')
                 ->join('account','money_received.AccountID','=','account.ID')
                 ->select('money_received.*','account.Name')
                 ->where('AccountID','=',$ID)
                 ->where('Finished_Customer','=','Not')->get();


              //credit of customers     -  bill       - onging transaction
                $varBill = DB::table('bill')
                 ->join('account','bill.AccountID','=','account.ID')
                 ->select('bill.*','account.Name')
                 ->where('AccountID','=',$ID)
                 ->where('Finished','=','Not')->get();

                   


                  //debit of customers   -  money received   - recent transaction
                $recentDebit = DB::table('money_received')
                 ->join('account','money_received.AccountID','=','account.ID')
                 ->select('money_received.*','account.Name')
                 ->where('AccountID','=',$ID)
                 ->where('Finished_Customer','=','Yes')
                 ->orderBy('ID','desc')
                 ->limit(5)
                 ->get();


              //credit of customers     -  bill       - recent transaction
                $recentCredit = DB::table('bill')
                 ->join('account','bill.AccountID','=','account.ID')
                 ->select('bill.*','account.Name')
                 ->where('AccountID','=',$ID)
                 ->where('Finished','=','Yes')
                 ->orderBy('ID','desc')
                 ->limit(5)
                 ->get();
                
                


                $Vartbl2 = DB::table('money_received')
                ->select(DB::raw('AccountID,SUM(Amount) As Amount'))
                ->groupBy('AccountID')
                ->where('Finished_Customer','=','Not')
                ->where('AccountID','=',$ID)->first();
                
                
                $amount_dt = DB::table('money_received')
                ->select(DB::raw('SUM(Amount) As Amount'))
                ->groupBy('AccountID')
                ->where('Finished_Customer','=','Not')
                ->where('AccountID','=',$ID)->first();

                $amount_cr = DB::table('bill')
                ->join('account','bill.AccountID','=','account.ID')
                ->select(DB::raw('SUM(bill.Price) As Price'))
                ->groupBy('account.Name')
                ->where('Finished','=','Not')
                ->where('AccountID','=',$ID)->first();

                
                 
                  
                  //select saved pomade customers
                  $previous = DB::table('pomade_customer')
                 ->where('AccountID',$ID)
                 ->orderBy('ID','desc')
                 ->limit(1)
                 ->first();


                  $cs = DB::table('pomade_customer')
                  ->select(DB::raw('balance'))
                  ->where('AccountID',$ID)
                  ->orderBy('ID','desc')
                  ->limit(1)
                  ->first();



               
                  $totalbill = $amount_cr->Price;
                  $totalmoney = $amount_dt->Amount;
               
                 if($cs)
                  {
                   $balance = ((int)$cs->balance + (int)$amount_cr->Price - (int)$amount_dt->Amount);
                  }
                 else
                 {
                     $balance = ((int)$amount_cr->Price - (int)$amount_dt->Amount);
                 }
                    
                 


                $data = array(
                  'tableVar'=>$Vartbl,
                  'bill'=>$varBill,
                  'CID'=>$ID,
                  'result'=>$balance,
                  'previous'=>$previous,
                  'recentD'=>$recentDebit,
                  'recentC'=>$recentCredit,
                  'totalbill'=>$totalbill,
                  'totalmoney'=>$totalmoney,
                  'Name'=>$name
                  );
              
                return view('kabularyaFolder.pomade_customer',$data);    
      

            
          }
          else
          {
            return Redirect('login');
          }
        }



// pomade all Balance

  public function pomade_all_balance()
        {
          if(session()->has('session_login'))
          {
                

                
                 
                  
                  //select saved pomade customers
                  $previous = DB::table('pomade_customer')
                 ->where('AccountID',2)
                 ->orderBy('ID','desc')
                 ->limit(1)
                 ->first();


                 $previous1 = DB::table('pomade_customer')
                 ->where('AccountID',3)
                 ->orderBy('ID','desc')
                 ->limit(1)
                 ->first();


                  $previous2 = DB::table('pomade_customer')
                 ->where('AccountID',5)
                 ->orderBy('ID','desc')
                 ->limit(1)
                 ->first();

    

              
                    
                 


                $data = array(
                  'previous'=>$previous,
                  'previous1'=>$previous1,
                  'previous2'=>$previous2
                  );
              
                return view('kabularyaFolder.pomade_all_balance',$data);    
      

            
          }
          else
          {
            return Redirect('login');
          }
        }





public function save_customer_pomade(Request $req)
        {
          if(session()->has('session_login'))
          {
                
            $ID = $req->Input('CID');

            $Vartbl = DB::table('money_received')
                 ->join('account','money_received.AccountID','=','account.ID')
                 ->select('money_received.*','account.*')
                 ->where('AccountID','=',$ID)
                 ->where('Finished_Customer','=','Not')
                 ->orderBy('money_received.ID','desc')->first();
                



                  $Vartbl4 = DB::table('bill')
                ->join('account','bill.AccountID','=','account.ID')
                ->select('bill.*','account.*')
                ->where('Finished','=','Not')
                ->where('AccountID','=',$ID)
                ->orderBy('bill.ID','desc')
                ->first();


                $amount_dt = DB::table('money_received')
                ->select(DB::raw('SUM(Amount) As Amount'))
                ->groupBy('AccountID')
                ->where('Finished_Customer','=','Not')
                ->where('AccountID','=',$ID)->first();

                $amount_cr = DB::table('bill')
                ->join('account','bill.AccountID','=','account.ID')
                ->select(DB::raw('SUM(bill.Price) As Price'))
                ->groupBy('account.Name')
                ->where('Finished','=','Not')
                ->where('AccountID','=',$ID)->first();

                 $previous = DB::table('pomade_customer')
                 ->orderBy('ID','desc')
                 ->where('AccountID',$ID)
                 ->limit(1)
                 ->first();
            
 
                 if(count($previous)>0)
                 {
                   $balance = ((int)$previous->balance + (int)$amount_cr->Price - (int)$amount_dt->Amount);
                }
                else
                {
                  $balance = ((int)$amount_cr->Price - (int)$amount_dt->Amount);
                }


                 //also account customer should be completed  cr and dt
                 $ended = array(
                       'Finished_Customer'=>'Yes'
                  );

             DB::table('money_received')->where('AccountID','=',$ID)->where('Amount','<>','0')->update($ended);    


                $ended_exp = array(
                       'Finished'=>'Yes'
                  );

             DB::table('bill')->where('AccountID','=',$ID)->where('Price','<>','0')->update($ended_exp); 


             
             $date = $req->Input('date');
           

          
            $data = array('customer'=>$Vartbl->Name,
                          'Bill_No'=>$Vartbl4->Bill_No, 
                          'Date_bill'=>$Vartbl4->Date,
                          'Description_bill'=>$Vartbl4->Description,
                          'Price'=>$Vartbl4->Price,
                          'ReceivedBy'=>$Vartbl->ReceivedBy,
                          'Amount'=>$Vartbl->Amount,
                          'Date_money'=>$Vartbl->Date,
                          'Description'=>$Vartbl->Description,
                          'save_date'=>$date,
                          'balance'=>$balance,
                          'AccountID'=>$ID
              );

            DB::table('pomade_customer')->insert($data);
            return Redirect('managePage');

            
          }
          else
          {
            return Redirect('login');
          }
        }






public function all_pomade_cs($CID)
{

 
if(session()->has('session_login'))
          {
                
              //name customer
            $name = DB::table('account')
            ->select('Name')
            ->where('ID',$CID)
            ->get();

            

              //debit of customers   -  money received   - recent transaction
                $recentDebit = DB::table('money_received')
                 ->join('account','money_received.AccountID','=','account.ID')
                 ->select('money_received.*','account.Name')
                 ->where('AccountID','=',$CID)
                 ->where('Finished_Customer','=','Yes')
                 ->orderBy('ID','desc')
                 ->get();


              //credit of customers     -  bill       - recent transaction
                $recentCredit = DB::table('bill')
                 ->join('account','bill.AccountID','=','account.ID')
                 ->select('bill.*','account.Name')
                 ->where('AccountID','=',$CID)
                 ->where('Finished','=','Yes')
                 ->orderBy('ID','desc')
                 ->get();



                  $data = array(
                  'recentD'=>$recentDebit,
                  'recentC'=>$recentCredit,
                  'Name'=>$name
                  );
              
                return view('kabularyaFolder.all_pomade_cs',$data);
          }
          else
          {
            return Redirect('login');
          }
}








public function check_money_received()
        {
          if(session()->has('session_login'))
          {
                

                 $Vartbl = DB::table('money_received')->where('Finished_Sayed_Moh_Shah','=','Not')->get();
                $data = array('tableVar'=>$Vartbl);

                


                $Vartbl2 = DB::table('money_received')->select(DB::raw('ReceivedBy,SUM(Amount) As Amount'))->groupBy('ReceivedBy')->where('Finished_Sayed_Moh_Shah','=','Not')->where('ReceivedBy','=','Said Moh Shah')->get();
                $data2 = array('tableVar2'=>$Vartbl2);

              
                return view('kabularyaFolder.money_received',$data,$data2);
            
          }
          else
          {
            return Redirect('login');
          }
        }



public function completedAccount(Request $req,$ID)
        {
          if(session()->has('session_login'))
          {
                

             $ID = $req->ID;
             $finished = $req->finished;
           

          
            $data = array('Finished_Sayed_Moh_Shah'=>$finished
                          );

            DB::table('money_received')->where('ID',$ID)->update($data);
            return Redirect('money_received');

            
          }
          else
          {
            return Redirect('login');
          }
        }




          public function check_filter_money_received(Request $req)
        {
          if(session()->has('session_login'))
          {

               $filterName = $req->input('search');

                $Vartbl = DB::table('money_received')->where('ReceivedBy','=',$filterName)->get();
                $data = array('tableVar'=>$Vartbl);

                $Vartbl2 = DB::table('money_received')->select(DB::raw('ReceivedBy,SUM(Amount) As Amount'))->groupBy('receivedBy')->where('ReceivedBy','=',$filterName)->get();
                $data2 = array('tableVar2'=>$Vartbl2);



                return view('kabularyaFolder.money_received',$data,$data2);
            
          }
          else
          {
            return Redirect('login');
          }
        }



   public function insert_money_received()
      {

         if(session()->has('session_login'))
          {

            $info=DB::table('account')->get();
         $data = array('varTbl'=>$info);
         return view('kabularyaFolder.insert_money_received',$data);



            
          }
          else
          {
            return redirect('login');
          }
      }


public function save_money_received(Request $req)
      {        
 
            


             
           
             $customer = $req->Input('customer');
             $receivedBy = $req->Input('receivedBy');
             $amount = $req->Input('Amount');
             $description = $req->Input('Description');
             $date = $req->Input('Date');
            
            
            

          
                $data = array('AccountID'=>$customer,
                          'ReceivedBy'=>$receivedBy,
                          'Amount'=>$amount,
                          'Description'=>$description,
                          'Date'=>$date
                          );
              
                 DB::table('money_received')->insert($data);
                 Session::flash('success','successfully paid money');
                 return Redirect('money_received');
               
                
            
      }


 public function edit_money_received($ID)
      {

        if(session()->has('session_login'))
        {
         $info=DB::table('money_received')->where('ID',$ID)->first();
         $data = array('varTbl'=>$info);
         return view('kabularyaFolder.edit_money_received',$data);
        }
        else
        {
          return redirect('login');
        }
      }

public function update_money_received(Request $req,$ID)
     {
             $ID = $req->ID;
             $AccountID = $req->AccountID;
             $ReceivedBy = $req->ReceivedBy;
             $Amount = $req->Amount;
             $Description = $req->Description;
             $Date = $req->Date;
            
             

          
            $data = array('AccountID'=>$AccountID,
                          'ReceivedBy'=>$ReceivedBy,
                          'Amount'=>$Amount,
                          'Description'=>$Description,
                          'Date'=>$Date
                          );

            DB::table('money_received')->where('ID',$ID)->update($data);
            return Redirect('money_received');
     }


   public function delete_money_received($ID)
     {

      if(session()->has('session_login'))
      {
       
       DB::table('money_received')->where('ID',$ID)->delete();
      
       return Redirect::Back();
      }
      else
      {
        return redirect('login');
      }

     }









public function check_expenses()
        {
          if(session()->has('session_login'))
          {
                

                 $Vartbl = DB::table('expenses')->get();
                $data = array('tableVar'=>$Vartbl);

              
                return view('kabularyaFolder.expenses',$data);
            
          }
          else
          {
            return Redirect('login');
          }
        }


   public function insert_expenses()
      {

         if(session()->has('session_login'))
          {

            $info = DB::table('account')
            ->where('ID',4)
            ->first();
         $data = array('varTbl'=>$info);
         return view('kabularyaFolder.insert_expenses',$data);



            
          }
          else
          {
            return redirect('login');
          }
      }


public function save_expenses(Request $req)
      {        
 
            


             
           
             $accountID = $req->Input('AccountID');
             $amount = $req->Input('Amount');
             $description = $req->Input('Description');
             $date = $req->Input('Date');
            
            
            

          
                $data = array('AccountID'=>$accountID,
                          'Amount'=>$amount,
                          'Description'=>$description,
                          'Date'=>$date
                          );
              
                 DB::table('expenses')->insert($data);
                 Session::flash('success','successfully expenses saved');
                 return Redirect('expenses');
               
                
            
      }

 public function edit_expenses($ID)
      {

        if(session()->has('session_login'))
        {
         $info=DB::table('expenses')->where('ID',$ID)->first();
         $data = array('varTbl'=>$info);
         return view('kabularyaFolder.edit_expenses',$data);
        }
        else
        {
          return redirect('login');
        }
      }


public function update_expenses(Request $req,$ID)
     {
             $ID = $req->ID;
             $AccountID = $req->AccountID;
             $Amount = $req->Amount;
             $Description = $req->Description;
             $Date = $req->Date;
            
             

          
            $data = array('AccountID'=>$AccountID,
                          'Amount'=>$Amount,
                          'Description'=>$Description,
                          'Date'=>$Date
                          );

            DB::table('expenses')->where('ID',$ID)->update($data);
            return Redirect('expenses');
     }


   public function delete_expenses($ID)
     {

      if(session()->has('session_login'))
      {
       
       DB::table('expenses')->where('ID',$ID)->delete();
      
       return Redirect::Back();
      }
      else
      {
        return redirect('login');
      }

     }






public function check_bill()
        {
          if(session()->has('session_login'))
          {
                

                 $Vartbl = DB::table('bill')
                 ->join('account','bill.accountID','=','account.ID')
                 ->select('bill.*','account.Name')
                 ->get();
                 $account = DB::table('account')->get();


                $data = array('tableVar'=>$Vartbl,'account'=>$account);

              
                return view('kabularyaFolder.bill',$data);
            
          }
          else
          {
            return Redirect('login');
          }
        }


public function filter_bill(Request $req)
        {
          if(session()->has('session_login'))
          {
                


                 $ID = $req->Input('select_cs');

                 $Vartbl = DB::table('bill')
                 ->join('account','bill.AccountID','=','account.ID')
                 ->select('bill.*','account.Name')
                 ->where('account.ID',$ID)
                 ->get();
               
                   $account = DB::table('account')->get();


                $data = array('tableVar'=>$Vartbl,'account'=>$account);

              
                return view('kabularyaFolder.bill',$data);
            
          }
          else
          {
            return Redirect('login');
          }
        }


   public function insert_bill()
      {

         if(session()->has('session_login'))
          {

            $info=DB::table('account')->get();
         $data = array('varTbl'=>$info);
         return view('kabularyaFolder.insert_bill',$data);



            
          }
          else
          {
            return redirect('login');
          }
      }


public function save_bill(Request $req)
      {        
 
            


             
           
             $accountID = $req->Input('AccountID');
             $bill_no = $req->Input('Bill_No');
             $date = $req->Input('Date');
             $price = $req->Input('Price');
             $description = $req->Input('Description');

            
            //read the previous bill info and compare with entered bill
        
            $read = DB::table('bill')
            ->where(['Bill_No'=>$bill_no,'Date'=>$date,'AccountID'=>$accountID])->get();
           




            
            //if read it means there is already bill is exists otherwise insert the bill
            if(count($read) <> 1)
            {
               

               //insert the bill
               $data = array('AccountID'=>$accountID,
                          'Bill_No'=>$bill_no,
                          'Date'=>$date,
                          'Price'=>$price,
                          'Description'=>$description
                          );
              
                 DB::table('bill')->insert($data);
                 Session::flash('success','successfully bill saved');
                 return Redirect('bill');

            }
            else
            {
              
                 //There is already bill exist 
              Session::flash('exist','There is one bill already exist !!!');
              return Redirect('bill');
            }

          
               
               
                
            
      }

 public function edit_bill($ID)
      {

        if(session()->has('session_login'))
        {
         $info=DB::table('bill')->where('ID',$ID)->first();
         $data = array('varTbl'=>$info);
         return view('kabularyaFolder.edit_bill',$data);
        }
        else
        {
          return redirect('login');
        }
      }


public function update_bill(Request $req,$ID)
     {
             $ID = $req->ID;
             $AccountID = $req->AccountID;
             $Bill_No = $req->Bill_No;
             $Date = $req->Date;
             $Price = $req->Price;
             $Description = $req->Description;
             
            
             

          
            $data = array('AccountID'=>$AccountID,
                          'Bill_No'=>$Bill_No,
                          'Date'=>$Date,
                          'Price'=>$Price,
                          'Description'=>$Description
                          
                          );

            DB::table('bill')->where('ID',$ID)->update($data);
            return Redirect('bill');
     }


   public function delete_bill($ID)
     {

      if(session()->has('session_login'))
      {
       
       DB::table('bill')->where('ID',$ID)->delete();
      
       return Redirect::Back();
      }
      else
      {
        return redirect('login');
      }

     }








public function check_money_received_syrup()
        {
          if(session()->has('session_login'))
          {
                

                 $Vartbl = DB::table('money_received_syrup')->get();
                $data = array('tableVar'=>$Vartbl);

                $Vartbl1 = DB::table('account')->get();
                $data1 = array('tableVar1'=>$Vartbl1);


              
                return view('kabularyaFolder.money_received_syrup',$data,$data1);
            
          }
          else
          {
            return Redirect('login');
          }
        }


   public function insert_money_received_syrup()
      {

         if(session()->has('session_login'))
          {

            $info=DB::table('account')->get();
         $data = array('varTbl'=>$info);
         return view('kabularyaFolder.insert_money_received_syrup',$data);



            
          }
          else
          {
            return redirect('login');
          }
      }


public function save_money_received_syrup(Request $req)
      {        
 
            


             
           
             $customer = $req->Input('customer');
             $receivedBy = $req->Input('receivedBy');
             $amount = $req->Input('Amount');
             $description = $req->Input('Description');
             $date = $req->Input('Date');
            
            
            

          
                $data = array('AccountID'=>$customer,
                          'ReceivedBy'=>$receivedBy,
                          'Amount'=>$amount,
                          'Description'=>$description,
                          'Date'=>$date
                          );
              
                 DB::table('money_received_syrup')->insert($data);
                 Session::flash('success','successfully paid money');
                 return Redirect('money_received_syrup');
               
                
            
      }

 public function edit_money_received_syrup($ID)
      {

        if(session()->has('session_login'))
        {
         $info=DB::table('money_received_syrup')->where('ID',$ID)->first();
         $data = array('varTbl'=>$info);
         return view('kabularyaFolder.edit_money_received_syrup',$data);
        }
        else
        {
          return redirect('login');
        }
      }


public function update_money_received_syrup(Request $req,$ID)
     {
             $ID = $req->ID;
             $AccountID = $req->AccountID;
             $ReceivedBy = $req->ReceivedBy;
             $Amount = $req->Amount;
             $Description = $req->Description;
             $Date = $req->Date;
            
             

          
            $data = array('AccountID'=>$AccountID,
                          'ReceivedBy'=>$ReceivedBy,
                          'Amount'=>$Amount,
                          'Description'=>$Description,
                          'Date'=>$Date
                          );

            DB::table('money_received_syrup')->where('ID',$ID)->update($data);
            return Redirect('money_received_syrup');
     }

   public function delete_money_received_syrup($ID)
     {

      if(session()->has('session_login'))
      {
       
       DB::table('money_received_syrup')->where('ID',$ID)->delete();
      
       return Redirect::Back();
      }
      else
      {
        return redirect('login');
      }

     }



public function check_expenses_syrup()
        {
          if(session()->has('session_login'))
          {
                

                 $Vartbl = DB::table('expenses_syrup')->get();
                $data = array('tableVar'=>$Vartbl);

              
                return view('kabularyaFolder.expenses_syrup',$data);
            
          }
          else
          {
            return Redirect('login');
          }
        }

   public function insert_expenses_syrup()
      {

         if(session()->has('session_login'))
          {

            $info=DB::table('expenses_syrup')->get();
         $data = array('varTbl'=>$info);
         return view('kabularyaFolder.insert_expenses_syrup',$data);



            
          }
          else
          {
            return redirect('login');
          }
      }


public function save_expenses_syrup(Request $req)
      {        
 
            


             
           
             $accountID = $req->Input('AccountID');
             $amount = $req->Input('Amount');
             $description = $req->Input('Description');
             $date = $req->Input('Date');
            
            
            

          
                $data = array('AccountID'=>$accountID,
                          'Amount'=>$amount,
                          'Description'=>$description,
                          'Date'=>$date
                          );
              
                 DB::table('expenses_syrup')->insert($data);
                 Session::flash('success','successfully expenses saved');
                 return Redirect('expenses_syrup');
               
                
            
      }


 public function edit_expenses_syrup($ID)
      {

        if(session()->has('session_login'))
        {
         $info=DB::table('expenses_syrup')->where('ID',$ID)->first();
         $data = array('varTbl'=>$info);
         return view('kabularyaFolder.edit_expenses_syrup',$data);
        }
        else
        {
          return redirect('login');
        }
      }


public function update_expenses_syrup(Request $req,$ID)
     {
             $ID = $req->ID;
             $AccountID = $req->AccountID;
             $Amount = $req->Amount;
             $Description = $req->Description;
             $Date = $req->Date;
            
             

          
            $data = array('AccountID'=>$AccountID,
                          'Amount'=>$Amount,
                          'Description'=>$Description,
                          'Date'=>$Date
                          );

            DB::table('expenses_syrup')->where('ID',$ID)->update($data);
            return Redirect('expenses_syrup');
     }


   public function delete_expenses_syrup($ID)
     {

      if(session()->has('session_login'))
      {
       
       DB::table('expenses_syrup')->where('ID',$ID)->delete();
      
       return Redirect::Back();
      }
      else
      {
        return redirect('login');
      }

     }








public function check_bill_syrup()
        {
          if(session()->has('session_login'))
          {
                

                 $Vartbl = DB::table('bill_syrup')->get();
                $data = array('tableVar'=>$Vartbl);

              
                return view('kabularyaFolder.bill_syrup',$data);
            
          }
          else
          {
            return Redirect('login');
          }
        }

   public function insert_bill_syrup()
      {

         if(session()->has('session_login'))
          {

            $info=DB::table('bill_syrup')->get();
         $data = array('varTbl'=>$info);
         return view('kabularyaFolder.insert_bill_syrup',$data);



            
          }
          else
          {
            return redirect('login');
          }
      }

public function save_bill_syrup(Request $req)
      {        
 
            


             
           
             $accountID = $req->Input('AccountID');
             $bill_no = $req->Input('Bill_No');
             $date = $req->Input('Date');
             $price = $req->Input('Price');
             $description = $req->Input('Description');

             
            
            
            

          
                $data = array('AccountID'=>$accountID,
                          'Bill_No'=>$bill_no,
                          'Date'=>$date,
                          'Price'=>$price,
                          'Description'=>$description
                          );
              
                 DB::table('bill_syrup')->insert($data);
                 Session::flash('success','successfully bill saved');
                 return Redirect('bill_syrup');
               
                
            
      }

 public function edit_bill_syrup($ID)
      {

        if(session()->has('session_login'))
        {
         $info=DB::table('bill_syrup')->where('ID',$ID)->first();
         $data = array('varTbl'=>$info);
         return view('kabularyaFolder.edit_bill_syrup',$data);
        }
        else
        {
          return redirect('login');
        }
      }

public function update_bill_syrup(Request $req,$ID)
     {
             $ID = $req->ID;
             $AccountID = $req->AccountID;
             $Bill_No = $req->Bill_No;
             $Date = $req->Date;
             $Price = $req->Price;
             $Description = $req->Description;
             
            
             

          
            $data = array('AccountID'=>$AccountID,
                          'Bill_No'=>$Bill_No,
                          'Date'=>$Date,
                          'Price'=>$Price,
                          'Description'=>$Description
                          
                          );

            DB::table('bill_syrup')->where('ID',$ID)->update($data);
            return Redirect('bill_syrup');
     }

   public function delete_bill_syrup($ID)
     {

      if(session()->has('session_login'))
      {
       
       DB::table('bill_syrup')->where('ID',$ID)->delete();
      
       return Redirect::Back();
      }
      else
      {
        return redirect('login');
      }

     }

















      public function home()
      {
        //home page controller
        $infoVar = DB::table('main')->get();
        $data = array('infoTest'=>$infoVar);
        return view('welcome',$data);
      }



      public function manageC(Request $req)
      {
         $username = $req->input('username');
        $password = $req->input('password');

         $req->session()->put('session_login',$username.$password);

         if($req->session()->has('session_login'))
         {
             //allow
                    //check with database
             $check = DB::Table('user')->where(['username'=>$username,'password'=>$password])->get();

              if(count($check) == 1)
               {
              
                $Vartbl = DB::table('main')->get();

                //also get customer ID and Name 
                $cs = DB::table('account')
                ->where('ID','<>',4)
                ->get();

                $data = array('tableVar'=>$Vartbl,'custom'=>$cs);
                

              


                return view('kabularyaFolder.manage',$data);

                }
              else
                {
                  return Redirect('login');
                }
         }
         else
         {
            return Redirect('login');
         }

       

      }

   

   public function productC()
   {
	            $infoVar = DB::table('producttable')->paginate(5);
                $data = array('infoTest'=>$infoVar);
                return view('kabularyaFolder.product',$data);
   }

   
   
     public function itemC($id)
      {

         
         $info=DB::table('producttable')->where('id',$id)->first();
         $data = array('infoTest'=>$info);
         return view('kabularyaFolder.item',$data);
       
      }
   
   
 public function aboutC()
   {
              $infoVar = DB::table('abouttbl')->get();
                $data = array('infoTest'=>$infoVar);
                return view('kabularyaFolder.about',$data);
   }



   public function contactC()
      {

         
            return view('kabularyaFolder.contact');
         
            
          
      }

    public function saveC(Request $req)
      {        

          
             $name = $req->Input('name');
             $email = $req->Input('email');
             $message = $req->Input('message');
            

            
            
                 //not exists enter new
                $data = array('name'=>$name,
                          'email'=>$email,
                          'message'=>$message);
              
                 DB::table('contacttbl')->insert($data);
                 Session::flash('success','You successfully sent your Message, Thank you');
                 return Redirect('contact');
               
                
            
      }




    public function edit_main($id)
      {

        if(session()->has('session_login'))
        {
         $info=DB::table('main')->where('id',$id)->first();
         $data = array('varTbl'=>$info);
         return view('kabularyaFolder.edit_main',$data);
        }
        else
        {
          return redirect('login');
        }
      }


 public function update_main(Request $req,$id)
     {
             $id = $req->id;
             $description = $req->description;
             $picture = $req->picture;
             $news = $req->news;
             $event1 = $req->event1;
             $event2 = $req->event2;
             $event3 = $req->event3;

          
            $data = array('description'=>$description,
                          'picture'=>$picture,
                          'news'=>$news,
                          'event1'=>$event1,
                          'event2'=>$event2,
                          'event3'=>$event3
                          );

            DB::table('main')->where('id',$id)->update($data);
            return Redirect('main_admin');
     }


   public function delete_main($id)
     {

      if(session()->has('session_login'))
      {
       
       DB::table('main')->where('id',$id)->delete();
      
       return Redirect::Back();
      }
      else
      {
        return redirect('login');
      }

     }


     public function insert_main()
      {

         if(session()->has('session_login'))
          {
            return view('kabularyaFolder.insert_main');
          }
          else
          {
            return redirect('login');
          }
      }


    public function save_main(Request $req)
      {        
 
             $image = $req->Input('image');


             
           
             $imageName = time().'.'. $req->image->getClientOriginalName();
             $req->image->move(public_path('images'), $imageName);

             $description = $req->Input('description');
             $picture = "images/" . $imageName;
             $news = $req->Input('news');
             $event1 = $req->Input('event1');
             $event2 = $req->Input('event2');
             $event3 = $req->Input('event3');
            

            
            
                 //not exists enter new
                $data = array('description'=>$description,
                          'picture'=>$picture,
                          'news'=>$news,
                          'event1'=>$event1,
                          'event2'=>$event2,
                          'event3'=>$event3
                          );
              
                 DB::table('main')->insert($data);
                 Session::flash('success','You successfully sent your Message, Thank you');
                 return Redirect('main_admin');
               
                
            
      }





public function edit_product($id)
      {

        if(session()->has('session_login'))
        {
         $info=DB::table('producttable')->where('id',$id)->first();
         $data = array('varTbl'=>$info);
         return view('kabularyaFolder.edit_product',$data);
        }
        else
        {
          return redirect('login');
        }
      }



 public function update_product(Request $req,$id)
     {
             $id = $req->id;
             $item = $req->Item;
             $picture = $req->Picture;
             $pic1 = $req->pic1;
             $description = $req->Description;
             
            

          
            $data = array('Item'=>$item,
                          'Picture'=>$picture,
                          'pic1'=>$pic1,
                          'Description'=>$description
                          );

            DB::table('producttable')->where('id',$id)->update($data);
            return Redirect('product_admin');
     }





  public function delete_product($id)
     {

      if(session()->has('session_login'))
      {
       
       DB::table('producttable')->where('id',$id)->delete();
      
       return Redirect::Back();
      }
      else
      {
        return redirect('login');
      }

     }


      public function insert_product()
      {

         if(session()->has('session_login'))
          {
            return view('kabularyaFolder.insert_product');
          }
          else
          {
            return redirect('login');
          }
      }



 public function save_product(Request $req)
      {        
 
             $image = $req->Input('image');
             $image1 = $req->Input('image1');
            

             
           
             $imageName = time().'.'. $req->image->getClientOriginalName();
             $req->image->move(public_path('images/product'), $imageName);
 

              $imageName1 = time().'.'. $req->image1->getClientOriginalName();
             $req->image1->move(public_path('images/product'), $imageName1);  


             $item = $req->Input('Item');
             $description = $req->Input('Description');
             $picture = "images/product/" . $imageName;
             $pic = "images/product/" . $imageName1;
             

            

            
                $data = array(
                          'Item'=>$item,
                          'Description'=>$description,
                          'Picture'=>$picture,
                          'pic1'=>$pic
                          );
              
                 DB::table('producttable')->insert($data);
                 Session::flash('success','You successfully add new Product');
                 return Redirect('product_admin');
               
                
            
      }






  public function edit_about($id)
      {

        if(session()->has('session_login'))
        {
         $info=DB::table('abouttbl')->where('ID',$id)->first();
         $data = array('varTbl'=>$info);
         return view('kabularyaFolder.edit_about',$data);
        }
        else
        {
          return redirect('login');
        }
      }



 public function update_about(Request $req,$id)
     {
             $id = $req->id;
             $description = $req->Description;
             
            

          
            $data = array(
                          'Description'=>$description
                          );

            DB::table('abouttbl')->where('ID',$id)->update($data);
            return Redirect('about_admin');
     }

 public function delete_about($id)
     {

      if(session()->has('session_login'))
      {
       
       DB::table('abouttbl')->where('ID',$id)->delete();
      
       return Redirect::Back();
      }
      else
      {
        return redirect('login');
      }

     }




    public function insert_about()
      {

         if(session()->has('session_login'))
          {
            return view('kabularyaFolder.insert_about');
          }
          else
          {
            return redirect('login');
          }
      }

public function save_about(Request $req)
      {        
 


           
             $description = $req->Input('Description');
          
             

            

            
                $data = array(
                          
                          'Description'=>$description
                          
                          );
              
                 DB::table('abouttbl')->insert($data);
                 Session::flash('success','You successfully add new info');
                 return Redirect('about_admin');
               
                
            
      }














        public function newEmployee()
      {

         if(session()->has('session_login'))
          {
            return view('employee.newPage');
          }
          else
          {
            return redirect('login');
          }
      }

     
      public function edit($id)
      {

        if(session()->has('session_login'))
        {
         $info=DB::table('employee')->where('id',$id)->first();
         $data = array('infoTest'=>$info);
         return view('employee.editPage',$data);
        }
        else
        {
          return redirect('login');
        }
      }

     public function update(Request $req,$id)
     {
          $id = $req->id;
         $firstname = $req->firstname;
             $lastname = $req->lastname;
             $sex = $req->sex;
             $phone = $req->phone;

          
            $data = array('firstname'=>$firstname,
                          'lastname'=>$lastname,
                          'sex'=>$sex,
                          'phone'=>$phone);

            DB::table('employee')->where('id',$id)->update($data);
            return Redirect('infoPage');
     }

     public function delete($id)
     {

      if(session()->has('session_login'))
      {
       DB::table('employee')->where('id',$id)->delete();
       return Redirect::Back();
      }
      else
      {
        return redirect('login');
      }

     }



   

}



