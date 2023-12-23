@extends('back_end.template')
@section('content')

<!-- breadcrumb start-->
<div class="content-header row">
    <div class="content-header-left col-md-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-md-6">
                <h2 class="content-header-title float-left mb-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <i class="feather icon-home"></i> <a href="{{route('dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <?php
                                $pageTitle = "Product Reports";
                            ?>
                            <a href="{{url('manage-productsReport.html')}}" title="<?php echo $pageTitle;?>"><?php echo $pageTitle;?></a>
                        </li>
                    </ol>
                </h2>
            </div>
            <div class="col-md-6 text-right">
                
            </div>
        </div>
    </div>
</div>
<!--breadcrumb end -->

<section id="row-grouping">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <fieldset>
                    <legend class="text-uppercase font-size-sm font-weight-bold">
                        <?php echo ucfirst($pageTitle);?>
                    </legend>
                </fieldset>

                <form action="" method="get">
                    <div class="row">
                        <div class="col-md-3">	
                            <input type="search" class="form-control" name="keywords" value="{{isset($_GET['keywords'])? $_GET['keywords'] :''}}" placeholder="Search...">
                            <span class="search-note">Note : Product Name, Mobile Number</p>
                        </div>	
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-info">Search <i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                        <div class="col-md-6" style="float:right;">
                            <div class="row counting">
                                <div class="show" style="margin-right:10px;">
                                    Show
                                </div>
                                <div class="filter-new-option">
                                    <select name="page_items" class="form-control count-arrow" onchange="this.form.submit()">
                                        <?php 
                                            foreach(page_items as $key=>$value)
                                            { 
                                                $selected="";
                                                if(isset($_GET['page_items']) && $_GET['page_items'] == $key)
                                                {
                                                    $selected="selected='selected'";
                                                }
                                                ?>
                                                <option value="<?php echo $key;?>" <?php echo $selected;?> ><?php echo $key;?></option>
                                                <?php 
                                            } 
                                        ?>
                                    </select>
                                </div>
                                <div class="entries" style="margin-left:10px;">
                                    entries
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row mt-1">
                        <div class="col-md-12 table-responsive">
                            <table class="table row-grouping dataTable" id="customers">
                                <thead class="tb-head">
                                    <tr role="row">
                                        <th onclick="sortTable(1)">Product Name</th>
                                        <th onclick="sortTable(2)" class="text-center">Product Code</th>
                                        <th class="text-center">Purchased Quantity</th>
                                        <th class="text-center">Cost</th>
                                        <th class="text-center">Sold Quantity</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Total</th>
                                        <th class="text-center">Profit</th>
                                    </tr>
                                </thead>

                                <tbody class="tb-data">
                                    @if($resultData->count() > 0)
                                    <?php 	
                                        foreach($resultData as $row)
                                        {
                                            $sales =  DB::table('sales_items')->select(
                                                'sales_items.product_id as product_id',
                                                DB::raw('SUM(sales_items.quantity) as squantity'),
                                                DB::raw('SUM(sales_items.gross_total) as total'),
                                                )->groupby('product_id')->get();
                                            
                                            foreach($sales as $srow) 
                                            {
                                                if($row->product_id == $srow->product_id)
                                                {
                                                    ?>
                                                    <tr>
                                                        <td class="tab-maxfull-width"><?php echo $row->product_name;?></td>
                                                        <td class="tab-medium-width" style="text-align:center;"><?php echo $row->product_code;?></td>
                                                        <td style="text-align:center;">
                                                            <?php echo $row->pquantity;?>
                                                        </td>
                                                        
                                                        <td class="tab-medium-width" style="text-align:center;">
                                                            <?php echo CURRENCY_SYMBOL;?>
                                                            <?php echo number_format($row->cost,DECIMAL_VALUE,'.','');?>
                                                        </td>
                                                        <td class="tab-medium-width" style="text-align:center;">
                                                            <?php
                                                                echo $srow->squantity;
                                                            ?>
                                                        </td>
                                                        
                                                        <td class="tab-medium-width" style="text-align:center;">
                                                            <?php echo CURRENCY_SYMBOL;?>
                                                            <?php echo number_format($row->price,DECIMAL_VALUE,'.','');?>
                                                        </td>
                                                        
                                                        <td class="tab-medium-width" style="text-align:center;">
                                                            <?php echo CURRENCY_SYMBOL;?>
                                                            <?php echo number_format($row->total,DECIMAL_VALUE,'.','');?>
                                                        </td>
                                                        
                                                        <td class="tab-medium-width" style="text-align:center;">
                                                            <?php
                                                                $profit = ( $srow->squantity * $row->price) - ( $srow->squantity * $row->cost);
                                                                echo CURRENCY_SYMBOL ." ". number_format($profit,DECIMAL_VALUE,'.','');
                                                            ?>
                                                        </td>
                                                        
                                                    </tr>
                                                    <?php 
                                                }
                                            }
                                        }
                                    ?>
                                    @else
                                        <tr>
                                            <td class="text-center" colspan="8">
                                                {{NO_DATA_FOUND}}
                                            </td>
                                        </tr>
                                    @endif    
                                </tbody>
                            </table>

                            <div class="row mt-2">
                                <div class="col-8 d-flex">
                                    <div class="8dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                                        Showing {{($resultData->firstItem())? :'0' }} to {{$resultData->lastItem()}} of {{$resultData->total()}} entries
                                    </div>
                                </div>
                                <div class="col-4 ">
                                    <div class="text-right justify-content-end float-right" >
                                        {{$resultData->appends(request()->input())->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
