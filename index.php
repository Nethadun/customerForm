<?php
/**
 * Created by IntelliJ IDEA.
 * User: Chathura
 * Date: 6/17/2019
 * Time: 9:37 AM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        *{
            margin: 0;
        }
        .head{
            width: 100%;
            height: 100px;
            background-color: aquamarine;
        }
        .label{
            text-align: left;
        }
        .text{
            width: 1150px;
        }
        .buttonS{
            background-color: mediumspringgreen;
        }
        .buttonR{
            background-color: lightcoral;
        }
    </style>
</head>
<body>
<div class="head">
    <h1 style="text-align: center">Customer Form</h1>
</div>
<form action="customerController.php" method="post" id="nameForm">
    <table>
        <tr>
            <th class="label">Customer ID</th>
            <th>:</th>
            <th><input type="text" placeholder="input customer id" name="cid" id="txtcid" class="text"></th>
        </tr>
        <tr>
            <th class="label">Customer Name</th>
            <th>:</th>
            <th><input type="text" placeholder="input customer name" name="cName" id="txtname" class="text"></th>
        </tr>
        <tr>
            <th class="label">Customer Address</th>
            <th>:</th>
            <th><input type="text" placeholder="input customer address" name="cAddress" id="txtaddress" class="text"></th>
        </tr>
        <tr>
            <th class="label">Customer Mobile No</th>
            <th>:</th>
            <th><input type="text" placeholder="input customer mob" name="tel" id="txttel" class="text"></th>
        </tr>
        <tr>
            <th class="label">Credit Limit</th>
            <th>:</th>
            <th><input type="text" placeholder="input credit limit" name="sal" id="txtsal" class="text"></th>
        </tr>
        <br>
        <br>
        <tr>
            <th><button type="submit" form="nameForm" value="submit" class="buttonS">submit</button></th>
            <th><input type="reset" value="rest" class="buttonR"></th>
        </tr>
    </table>
</form>
<script src="js/jquery-3.4.1.min.js"></script>
<script>
    //Validation for Phone Number
    if (
        $("#btnadd").click(function () {
            var value = $("#txttel").val();
            var regEx = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
            var result = regEx.test(value);
            if (!result) {
                alert(" Telephone Number is Invalid");
            }
        })) ;
    //Validation for Name
    if (
        $("#btnadd").click(function () {
            var value = $("#txtname").val();
            var regEx = /^[a-zA-Z]*$/;
            var result = regEx.test(value);
            if (!result) {
                alert("Name Is Invalid..Please Input Only Letters");
            }
        })
    ) ;
    //validation for salary
    if (
        $("#btnadd").click(function () {
            var value = $("#txtsal").val();
            var regEx = /^\d{1,6}\.\d{1,6}$/;
            var result = regEx.test(value);
            if (!result) {
                alert("Please input Salary Like : 0000.00");
            }
        })
    ) ;
    $("#btnadd").click(function () {
        var cid=$("#txtcid").val();
        var regEx ="/C-\d{3}/";
        var result=regEx.test(cid);
        if (!result) {
            alert("ID is Invalid")
        }
    });
    $("#txtcid").keyup(function () {
        if($("#txtcid").val().length>4){
            alert("Format fail")
        }
    });
</script>
</body>
</html>

