<?php
//load_data_select.php
$connect = mysqli_connect("localhost", "root", "", "alumni");
function fill_brand($connect)
{
    $output = '';
    $sql = "SELECT * FROM alumni.upcoming_events";
    $result = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_array($result))
    {
        $output .= '<option value="'.$row["upcoming_event_id"].'">'.$row["upcoming_event_title"].'</option>';
    }
    return $output;
}
function fill_product($connect)
{

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Webslesson Tutorial | Multiple Image Upload</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>

<br /><br />
<div class="container" style="margin: 0 auto; width: 600px;">
    <h3>
        <select name="brand" id="brand">
            <option value="">Show All Product</option>
            <?php echo fill_brand($connect); ?>
        </select>
        <br /><br />
        <div class="row" id="show_product">
            <?php echo fill_product($connect);?>
        </div>
    </h3>
</div>
</body>
</html>
<script>
    $(document).ready(function(){
        $('#brand').change(function(){
            var brand_id = $(this).val();
            $.ajax({
                url:"test3.php",
                method:"POST",
                data:{brand_id:brand_id},
                success:function(data){
                    $('#show_product').html(data);
                }
            });
        });
    });
</script>