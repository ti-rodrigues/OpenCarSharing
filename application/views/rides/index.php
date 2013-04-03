<?php foreach ($rides as $rides_item): ?>

    <h2><?php echo $rides_item['departure'] ?> - <?php echo $rides_item['destination'] ?></h2>
    <div id="main">
<?php echo $rides_item['date'] ?> - <?php echo $rides_item['time'] ?> <br />
        <?php echo $rides_item['description'] ?>
    </div>
    <p><a href="rides/<?php echo $rides_item['id'] ?>">View Ride</a></p>

<?php endforeach ?>
