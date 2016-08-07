<?php
/**
 *   Dashboard for the Give Donation Plugin
 */


class SalesDashboard extends EmbeddedDashboard {
    public function buildDashboard(){
        $chart = new ChartComponent("chart1");
        $chart->setCaption("The first Chart");
        $chart->setDimensions (4, 4);
        $chart->setLabels (["Jan", "Feb", "Mar"]);
        $chart->addSeries ("beverages", "Beverages", array(1355, 1916, 1150));
        $chart->addSeries ("packaged_foods", "Packaged Foods", array(1513, 976, 1321));

        $this->addComponent ($chart);
    }
}
?>