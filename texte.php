
        <?php
        
        $payback = 5.75;
        $fracPayBack = 0.5;
        
        echo $payback % 2;
        
        $fracPayBack = $payback % 2;

        echo $fracPayBack . "   - ";

        if($fracPayBack>=1) $fracPayBack = $fracPayBack - 1;

        echo $fracPayBack;          
        ?>
