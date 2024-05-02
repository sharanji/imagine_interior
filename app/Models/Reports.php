<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;
use DB;

class Reports extends Model
{
    use HasFactory;

    public static function dashboardAllReports()
	{
		$week =  date('W');
		$year = date("Y");
		
		$from = date("Y-m-d", strtotime("{$year}-W{$week}-1"));
		$to = date("Y-m-d", strtotime("{$year}-W{$week}-7"));
		
		#Products
		/* 	$data['todayProduct'] = DB::table('')->select('count(*) as item')->where('date',date("Y-m-d"))->get('products');
		$data['weekProduct'] = DB::table('')->select('count(*) as item')->where('date BETWEEN "'.$from.'" AND "'.$to.'"')->get('products');
		$data['monthProduct'] = DB::table('')->select('count(*) as item')->like('date',date('Y-m'))->get('products');
		$data['yearProduct'] = DB::table('')->select('count(*) as item')->like('date',date('Y'))->get('products');
		$data['allProduct'] = DB::table('')->select('count(*) as item')->get('products');
		*/

		#Purchase
		$Purchase = Session::get('purchase_filter');
		if(isset($Purchase) && !empty($Purchase))
		{
            switch ($Purchase) 
            {
                case '1':   #Today
                    $data['todayPurchase'] = DB::table('purchases as p')
                        ->select(DB::raw('SUM(pi.quantity) as item'),DB::raw('SUM(pi.cost*pi.quantity) as value'))
                        ->join('purchase_items as pi','p.purchase_id','pi.purchase_id')
                        ->join('products as pr','pr.product_id','pi.product_id')
                        ->where('p.date',date("Y-m-d"))
                        ->get();
                break;

                case '2':   #This Week
                    $data['weekPurchase'] = DB::table('purchases as p')->select(DB::raw('SUM(pi.quantity) as item'),DB::raw('SUM(pi.cost*pi.quantity) as value'))
                        ->join('purchase_items as pi','p.purchase_id','pi.purchase_id')
                        ->join('products as pr','pr.product_id','pi.product_id')
                        ->whereraw('p.date BETWEEN "'.$from.'" AND "'.$to.'"')
                        ->get();
                break;
                    
                case '3':   #This Month
                    $data['monthPurchase'] = DB::table('purchases as p')->select(DB::raw('SUM(pi.quantity) as item'),DB::raw('SUM(pi.cost*pi.quantity) as value'))
                        ->join('purchase_items as pi','p.purchase_id','pi.purchase_id')
                        ->join('products as pr','pr.product_id','pi.product_id')
                        ->where('p.date','like','%'.date('Y-m').'%')
                        ->get();  
                break;
                            
                case '4':   #This Year
                    $data['yearPurchase'] = DB::table('purchases as p')->select(DB::raw('SUM(pi.quantity) as item'),DB::raw('SUM(pi.cost*pi.quantity) as value'))
                        ->join('purchase_items as pi','p.purchase_id','pi.purchase_id')
                        ->join('products as pr','pr.product_id','pi.product_id')
                        ->where('p.date','like','%'.date('Y').'%')
                        ->get();
                break;

                case '5':   #All Time
                    $data['allPurchase'] = DB::table('purchases as p')->select(DB::raw('SUM(pi.quantity) as item'),DB::raw('SUM(pi.cost*pi.quantity) as value'))
                        ->join('purchase_items as pi','p.purchase_id','pi.purchase_id')
                        ->join('products as pr','pr.product_id','pi.product_id')
                        ->get();
                break;                 
            }
		}
		else
		{
            # Default [Today]
			$data['todayPurchase'] = DB::table('purchases as p')
                    ->select(DB::raw('SUM(pi.quantity) as item'),DB::raw('SUM(pi.cost*pi.quantity) as value'))
                    ->join('purchase_items as pi','p.purchase_id','pi.purchase_id')
                    ->join('products as pr','pr.product_id','pi.product_id')
                    ->where('p.date',date("Y-m-d"))
                    ->get();
		}
		
		#Sales
		$sales = Session::get('sales_filter');
		if(isset($sales) && !empty($sales))
		{
            switch ($sales) 
            {
                case '1':   #Today
                    $data['todaySales'] = DB::table('sales as s')
                        ->join('sales_items as si','s.sales_id','si.sales_id')
                        ->join('products as pr','pr.product_id','si.product_id')
                        ->select(DB::raw('SUM(si.quantity) as item'),DB::raw('SUM(si.price*si.quantity) as value'))
                        ->where('s.date',date("Y-m-d"))
                        ->get();
                break;

                case '2':   #This week
                    $data['weekSales'] = DB::table('sales as s')
                        ->select(DB::raw('SUM(si.quantity) as item'),DB::raw('SUM(si.price*si.quantity) as value'))
                        ->join('sales_items as si','s.sales_id','si.sales_id')
                        ->join('products as pr','pr.product_id','si.product_id')
                        ->whereraw('s.date BETWEEN "'.$from.'" AND "'.$to.'"')
                        ->get();
                break;
                    
                case '3':   #This Month
                    $data['monthSales'] = DB::table('sales as s')
                        ->select(DB::raw('SUM(si.quantity) as item'),DB::raw('SUM(si.price*si.quantity) as value'))
                        ->join('sales_items as si','s.sales_id','si.sales_id')
                        ->join('products as pr','pr.product_id','si.product_id')
                        ->where('s.date','like','%'.date('Y-m').'%')
                        ->get();
                break;
                            
                case '4':   #This Year
                    $data['yearSales'] = DB::table('sales as s')
                        ->select(DB::raw('SUM(si.quantity) as item'),DB::raw('SUM(si.price*si.quantity) as value'))
                        ->join('sales_items as si','s.sales_id','si.sales_id')
                        ->join('products as pr','pr.product_id','si.product_id')
                        ->where('s.date','like','%'.date('Y').'%')
                        ->get();
                break;

                case '5':   #All Time
                    $data['allSales'] = DB::table('sales as s')
                        ->select(DB::raw('SUM(si.quantity) as item'),DB::raw('SUM(si.price*si.quantity) as value'))
                        ->join('sales_items as si','s.sales_id','si.sales_id')
                        ->join('products as pr','pr.product_id','si.product_id')
                        ->get();
                break;                 
            }
		}
		else
		{
            # Default [Today]
			$data['todaySales'] = DB::table('sales as s')
                    ->select(DB::raw('SUM(si.quantity) as item'),DB::raw('SUM(si.price*si.quantity) as value'))
                    ->join('sales_items as si','s.sales_id','si.sales_id')
                    ->join('products as pr','pr.product_id','si.product_id')
                    ->where('s.date',date("Y-m-d"))
                    ->get();
		}

		#Expenses
		$expense = Session::get('expense_filter');
		if(isset($expense) && !empty($expense))
		{
            switch ($expense) {
                case '1':   #Today
                    $data['todayExpense'] = DB::table('expense as s')->select(DB::raw('SUM(s.amount) as value'))
                        ->where('s.date',date("Y-m-d"))
                        ->get();
                break;

                case '2':   #This week
                    $data['weekExpense'] = DB::table('expense as s')->select(DB::raw('SUM(s.amount) as value'))
                        ->whereraw('s.date BETWEEN "'.$from.'" AND "'.$to.'"')
                        ->get();
                break;

                case '3':   #This Month
                    $data['monthExpense'] = DB::table('expense as s')->select(DB::raw('SUM(s.amount) as value'))
                        ->where('s.date','like','%'.date('Y-m').'%')
                        ->get();
                break;

                case '4':   #This Year
                    $data['yearExpense'] = DB::table('expense as s')->select(DB::raw('SUM(s.amount) as value'))
						->where('s.date','like','%'.date('Y').'%')
						->get();
                break;

                case '5':   #All Time
                    $data['allExpense'] = DB::table('expense as s')->select(DB::raw('SUM(s.amount) as value'))->get();
                break;

            }
		}
		else
		{
            # Default [Today]
			$data['todayExpense'] = DB::table('expense as s')->select(DB::raw('SUM(s.amount) as value'))
						->where('s.date',date("Y-m-d"))
						->get();
		}
		return $data;
	}

	public static function todaySales()
	{
		$data['todaySales'] = DB::table('sales as s')
                        ->join('sales_items as si','s.sales_id','si.sales_id')
                        ->join('products as pr','pr.product_id','si.product_id')
                        ->select(DB::raw('SUM(si.quantity) as item'),DB::raw('SUM(si.price*si.quantity) as value'))
                        ->where('s.date',date("Y-m-d"))
                        ->get();
		return $data;
	}
	
	public static function currentMonthSales()
	{
		$query = "select sum(total) as total from sales
			where 
				MONTH(date)='".date('m')."' and 
					YEAR(date)='".date('Y')."' ";
		$result = DB::select($query);
		return $result;
	}
	
	public static function profit()
	{
		$salesQuery = "select s.sales_id,si.product_id,si.quantity from sales as s
		join sales_items as si on
			si.sales_id = s.sales_id
		join discount as d on
			d.discount_id = s.discount_id
		
		where 
			MONTH(s.date)='".date('m')."' and 
					YEAR(s.date)='".date('Y')."'
		";
		$sales = DB::select($salesQuery);
		
		$product = DB::select('select product_id,cost from products');
		
		$total = array();
		
		foreach ($sales as $row) 
		{
			foreach ($product as $value) 
			{
				if($row->product_id == $value->product_id)
				{
					if(!isset($total[$row->sales_id]))
					{
				        $total[$row->sales_id] = 0;
				    }
					$total[$row->sales_id] += $row->quantity * $value->cost;
				}
			}
		}
		
		/* $sales1 = $this->db->select('s.sales_id,d.*')
					->from('sales s')
					->join('discount d','d.discount_id = s.discount_id')
					->where('MONTH(s.date)',date('m'))
					->where('YEAR(s.date)',date('Y'))
					->get()->result(); */
		
		$tot = 0;
		foreach ($total as $value) 
		{
			$tot += $value;
		}
		
		return $tot;
	}
	
	public static function daySales()
	{
		$query = "SELECT s.sales_id, sum(s.total) AS total, date FROM sales s GROUP BY s.date";
		$result = DB::select($query);
		return $result;
	}
	
	public static function daySalesReturn()
	{
		$query = "SELECT s.id, sum(s.total) AS total, date FROM sales_return s GROUP BY s.date";
		$result = DB::select($query);
		return $result;
	}
	
	public static function dayProfit()
	{
		$query = 'SELECT 
						s.sales_id, 
						sum(s.total) AS ptotal, 
						ss.ctotal,
						(sum(s.total) - ss.ctotal) as profit,
						ss.name as name,
						ss.value as value,
						s.date 
					FROM sales s 
					INNER JOIN 
						(
							SELECT 
								si.sales_id,
								d.discount_value as value,
								d.discount_name as name,
								sum(si.quantity*p.cost) as ctotal,
								sd.date
								/*CASE
									WHEN d.discount_type = "Fixed" AND d.amount < sum(si.quantity*p.price) 
										THEN sum(si.quantity*p.cost) - d.discount_value
									WHEN d.discount_type = "Fixed"
										THEN sum(si.quantity*p.cost) 
									WHEN d.discount_type = "Percentage"
										THEN sum(si.quantity*p.cost) - (sum(si.quantity*p.cost)*d.discount_value/100)
								END as ctotal*/
							FROM sales_items si 
							INNER JOIN products p ON si.product_id = p.product_id
							INNER JOIN sales sd ON sd.sales_id = si.sales_id
							INNER JOIN discount d ON d.discount_id = sd.discount_id 
							GROUP BY sd.date

						) ss ON s.date = ss.date
					GROUP BY s.date
				';
		
		$result = DB::select($query);
		return $result;
	}

	public static function getProductReport()
	{
		$condition = " 1=1";
		
		if(!empty($_GET['keywords']))
		{
			$condition .= ' and (
								p.product_name like "%'.($_GET['keywords']).'%" or 
								p.product_code like "%'.($_GET['keywords']).'%"
							)
							';
		}
		
		if(!empty($_GET['from_date']) && !empty($_GET['to_date']))
		{
			if($_GET['from_date'] == $_GET['to_date'])
			{
				$condition .= ' and purchases.invoice_billing_date between '.strtotime($_GET['from_date']).' and '.strtotime($_GET['to_date']).' ';
			}
			else
			{ 
				#$condition .= ' and invoice_date between '.strtotime($_GET['from_date']).' and '.strtotime($_GET['to_date']).' ';
				$condition .= ' and purchases.invoice_billing_date >= '.strtotime($_GET['from_date']).' and purchases.invoice_billing_date <= '.strtotime($_GET['to_date']).' ';
			}
		}
		else if( !empty($_GET['from_date']) )
		{
			$condition .= ' and purchases.invoice_billing_date >= '.strtotime($_GET['from_date']).' ';
			
		}
		else if( !empty($_GET['to_date']) )
		{
			$condition .= ' and purchases.invoice_billing_date <= '.strtotime($_GET['to_date']).' ';
			
		}
		
		#columname BETWEEN '2012-12-25 00:00:00' AND '2012-12-25 23:59:59'
		
		$query = "select 
						p.product_name,
						p.product_code,
						p.cost,
						p.price,
						pi.product_id,
						sum(pi.quantity) as pquantity,
						sum(pi.gross_total) as total
		from purchase_items as pi
		
		left join purchases
			on purchases.purchase_id = pi.purchase_id
			
		left join products as p
			on p.product_id = pi.product_id
		
		where $condition
				order by pi.purchase_item_id desc
		";
				
		$result = DB::select($query);
		return $result;
	}

	function enquiryReports() {

		$result = array();

		$query = "select count(*) as total_enquiry from enquiry";
		$result['total_enquiry'] = DB::select($query)[0]->total_enquiry;
		
		$query = "select count(*) as closed_enquiry from enquiry where status=1";
		$result['closed_enquiry'] = DB::select($query)[0]->closed_enquiry;
		
		$result['unclosed_enquiry'] = $result['total_enquiry'] - $result['closed_enquiry'];
	
		return $result;

	}
}
