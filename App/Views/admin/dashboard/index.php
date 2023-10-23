<?php view('shared.admin.header', ['title' => 'Dashboard']); ?>

<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?= $total_orders ?></h3>
                <p>Total Orders</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="./?module=admin&controller=order" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?= $total_products ?></h3>
                <p>Total Products</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="./?module=admin&controller=product" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3><?= $total_customers ?></h3>
                <p>Total Customers</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="./?module=admin&controller=account" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3><?= $avg_rating ?><sup style="font-size: 20px">/5</sup></h3>
                <p>Average Rating</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="./?module=admin&controller=review" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
        <h2>Top Products</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Purchased</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($top_products) && is_array($top_products)) {
                    $counter = 1; // Initialize a counter
                    foreach ($top_products as $model) :
                ?>
                        <tr>
                            <td><?= $counter ?></td>
                            <td><?= isset($model['name']) ? $model['name'] : "N/A" ?></td>
                            <td><?= isset($model['category_name']) ? $model['category_name'] : "N/A" ?></td>
                            <td>
                                <?php
                                if (isset($model['price'])) {
                                    echo '<span class="badge badge-warning">$' . number_format($model['price'], 2, '.', '') . '</span>';
                                } else {
                                    echo "N/A";
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                if (isset($model['image'])) {
                                    echo '<img src="./public/uploads/' . $model['image'] . '" width="60">';
                                } else {
                                    echo "Image Not Available";
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                if (isset($model['total_purchased'])) {
                                    echo $model['total_purchased'];
                                } else {
                                    echo "N/A";
                                }
                                ?>
                            </td>
                        </tr>
                    <?php
                        $counter++; // Increment the counter
                    endforeach;
                } else {
                    ?>
                    <tr>
                        <td colspan="6">No top products found.</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
        <h2>Top Customers</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Province</th>
                    <th>Orders</th>
                    <th>Spendings</th>
                </tr>
            </thead>
            <tbody>
                <?php if (is_array($top_customers) && !empty($top_customers)) :
                    $counter = 1; // Initialize a counter
                    foreach ($top_customers as $customer) : ?>
                        <tr>
                            <td><?= $counter ?></td>
                            <td><?= isset($customer['fname']) && isset($customer['lname']) ? $customer['fname'] . ' ' . $customer['lname'] : "N/A" ?>
                            </td>
                            <td><?= isset($customer['phone']) ? $customer['phone'] : "N/A" ?></td>
                            <td><?= isset($customer['province']) ? $customer['province'] : "N/A" ?></td>
                            <td><?= isset($customer['total_orders']) ? $customer['total_orders'] : "N/A" ?></td>
                            <td>
                                <?php
                                if (isset($customer['total_spendings'])) {
                                    echo '<span class="badge badge-warning">$' . number_format($customer['total_spendings'], 2, '.', '') . '</span>';
                                } else {
                                    echo "N/A";
                                }
                                ?>
                            </td>
                        </tr>
                    <?php
                        $counter++; // Increment the counter
                    endforeach;
                else : ?>
                    <tr>
                        <td colspan="6">No top customers found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>


</div>

<?php view('shared.admin.footer'); ?>