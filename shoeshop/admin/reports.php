<!doctype html>
<html lang="en">
<?php include('head.php');?>

<body>
    <?php include('nav.php') ?>

    <div class="container-fluid">
        <div class="row">
            <?php include('sidebar.php')?>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

                <div class="mt-5">
                       <h1 class="h2">Reports List</h1>
                       <hr>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Start Date</label>
                                <input type="date" name="start_date" id="start_date" class="form-control">
                            </div>
                        </div>
                    </div>
                        <br><br>
                         <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">End Date</label>
                                <input type="date" name="end_date" id="end_date" class="form-control">
                            </div>
                        </div>
                    </div>
                        <br><br>
                        <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <br>
                                <a href="#" class="btn btn-success mt-2" id="search">Search</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
              <!--   <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"

                </div> -->
                <div class="row">
                    <div class="col-sm-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Voucher</th>
                                <th>User Name</th>
                                <th>Order Date</th>
                                <th>Order Status</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                        
                        </tbody>
                    </table>
                    </div>
                </div>


            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script>
    window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="dashboard.js"></script>
    <script src="../assets/dist/js/jquery.min.js"></script>



    <script>
       $(document).ready(function () {
        $('#search').click(function () {
            var start_date=$('#start_date').val();
            var end_date=$('#end_date').val();
            console.log(start_date,end_date);

            $.post('search_order.php',{
                'start_date':start_date,
                'end_date':end_date
            })
            
            .done(function (data) {
                var data=data;
                var order_list=JSON.parse(data);
                console.log(order_list);
                var no=1;
                var html='';
                
                $.each(order_list,function (i,v) {
                    var voucherid=v['voucherid'];
                    var user_name=v['user_name'];
                    var order_date=v['order_date'];
                    var order_status_id=v['order_status'];
                    var order_status='';
                    if(order_status_id==1){
                        order_status="confirmed";
                    }else if(order_status_id==2){
                        order_status="delivering";
                    }
                     html += `
                        <tr>
                            <td>${no}</td>
                            <td>${voucherid}</td>
                            <td>${user_name}</td>
                            <td>${order_date}</td>
                            <td>${order_status}</td>
                        </tr>
                    `;
                    
                    no++;
                    
                })

                $("#tbody").html(html);

              })
          })
         })

    </script>
</body>

</html>