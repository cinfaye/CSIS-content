<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Product Form</title>
        <?php
        include 'Header.php';
        ?>
<!-- content -->
        <div class="container-fluid">
            <div id="row" class="clear">
                <div class="col-md-3"></div>
                <!-- form -->
                <section id="slider" class="form col-md-6">
                    <header>
                        <h2>Fill out the form!</h2>
                    </header>
                    <form id="ProductManager" name="ProductManager" method="post" action="ProductResults.php" onsubmit="return validateForm()" class="form-group">
                        <table cellpadding="0" cellspacing="1" class="table-responsive">
                            <tr class="input-group">
                                <td colspan="3">
                                    Please feel free to enter the name product you are looking for.</td>
                            </tr>
                            <tr>
                                <td>&nbsp;
                                </td>
                                <td>&nbsp;
                                </td>
                                <td>&nbsp;
                                </td>
                            </tr>
                            <tr class="input-group">
                                <td align="right">
                                    Product Name</td>
                                <td align="left" >
                                    <input id="pname" type="text" name="pname" size="35"  class="form-group form-control"/> 
                                </td>
                                <td>
                                </td>
                            </tr >
                            <tr class="input-group">
                                <td align="right">
                                    Product Cost</td>
                                <td align="left" >
                                    <input id="cost" name="cost" type="text" size="15" class="form-group form-control"/></td>
                                <td>

                                </td>
                            </tr>
                            <tr class="input-group">
                                <td align="right">Description </td>
                                <td ><textarea name="desc" type="desc" id="mypassword" class="form-group" rows="4" cols="50" class="form-group form-control">Just something about the item</textarea></td>
                            </tr>
                            <tr class="input-group">
                                <td align="right">
                                    Image Link(copy and paste the URL): 
                                </td>
                                <td>
                                    <input id="image" type="text" name="image" size="35"  class="form-group form-control" value="img/default.jpg"/>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr class="input-group">
                                <td>

                                </td>
                                <td class="">
                                    <table>
                                        <tr>
                                            <td> <input id="button_Search" type="submit" value="Search" name="requestType" class="form-group form-inline"/> </td>
                                            <td><input id="Button_update" type="submit" value="Update" name="requestType" onclick="return ValidUpdate()"  class="form-group form-inline"/></td>
                                            <td><input id="Button_Input" type="submit" value="Create" name="requestType" onclick="return ValidCreate()" class="form-group form-inline"/></td>
                                        </tr>
                                    </table>
                                </td>
                                <td></td>
                            </tr>
                        </table>
                    </form>
                </section>                
                <!-- / content body -->
            </div>
        </div>
