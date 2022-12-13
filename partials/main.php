
<div class="containerx">
    <div class="cardContainer">
        
        <h3>CANI</h3>
        <div class="dogs">
            
            <div class="cardDog">
                <div>
                    <img src="./img/cibo_cani.jpg"  alt="">
                </div>
                <div>
                    <p><?php echo $dogs->getDogsProudctDetails() ?> &nbsp;<span class="lineThrough">29.90 $</span></p>
                    <p class="green">RIMANGONO SOLO 10 PEZZI</p>
                </div>
            </div>
            <div class="cardDog">
                <div>
                    <img src="./img/osso_cani.jpg" alt="">
                </div>
                <div>
                    <p><?php echo $dogs1->getDogsProudctDetails() ?></p>
                    
                </div>
            </div>
            <div class="cardDog">
                <div>
                    <img src="./img/guinzaglio_cani.jpg" alt="">
                </div>
                <div>
                    <p><?php echo $dogs2->getDogsProudctDetails() ?></p>
                </div>
            </div>
        </div>

        <h3>GATTI</h3>
        <div class="cats">
            
            <div class="cardCat">
                <div>
                    <img src="./img/cibo_gatti.jpg" alt="">
                </div>
                <div>
                    <p><?php echo $cats->getCatsProudctDetails() ?></p>
                </div>
            </div>
            <div class="cardCat">
                <div>
                    <img src="./img/trespolo_gatti.jpg" alt="">
                </div>
                <div>
                    <p><?php echo $cats1->getCatsProudctDetails() ?></p>                    
                </div>                
            </div>
            <div class="cardCat">
            <div>
                <img src="./img/lettiera_gatti.jpg" alt="">
                </div>
                <div>
                    <p><?php echo $cats2->getCatsProudctDetails() ?> &nbsp;<span class="lineThrough">89.90 $</span> </p>
                    <p class="green">RIMANGONO SOLO 10 PEZZI</p>              
                </div>                
            </div>                    
        </div>
    </div>
</div>