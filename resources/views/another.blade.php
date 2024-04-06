<div>
    <?php
            foreach($pets as $pet) {

                ?>
                    <h1>Pet name: {{ $pet->pet_name }}</h1>
                    <h1>Pet breed: {{ $pet->breed }}</h1>
                    <hr><br>
                <?php
            }
        ?>
</div>
