<?php require_once("../resource/config.php")?>
<?php include(TEMPLATE_FRONT . DS . "header.php")?>
<h1 class=text-center style="color: red"> <?php display_message();?></h1>


<!-- Page Content -->
<div class="container">
    <!-- /.row -->
    <div class="row">
        <h2 class="text-center btn-primary">Mon Panier</h2>
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="bongonomarguerite@gmail.com">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="upload" value="1">

            <table class="table table-striped table-bordered">
                <tr>
                    <th>Produit</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Sub-total</th>

                </tr>

                <?php cart();?>
            </table>
            <?php echo show_paypal(); ?>
           </form>
        </form>
        <!--  ***********CART TOTALS*************-->
        <div class="col-xs-4 pull-right ">
            <h2>Total de la carte</h2>

            <table class="table table-bordered" cellspacing="0">

                <tr class="cart-subtotal">
                    <th>Les produits:</th>
                    <td><span class="amount"><?php echo isset($_SESSION['item_quantity']) ?  $_SESSION['item_quantity'] : $_SESSION['item_quantity']='0' ?></span></td>
                </tr>
                <tr class="shipping">
                    <th>Shipping and Handling</th>
                    <td>Free Shipping</td>
                </tr>

                <tr class="order-total">
                    <th>Montant total de la démande</th>
                    <td><strong><span class="amount"><?php echo isset($_SESSION['item_total'])?  $_SESSION['item_total']: $_SESSION['item_total']='0';?> GNF</span></strong> </td>
                </tr>
                </tbody>

            </table>
        </div><!-- CART TOTALS-->
    </div>
    <!--Main Content-->
    <hr>

    <!-- Footer -->
    <?php include(TEMPLATE_FRONT . DS . "footer.php")?>