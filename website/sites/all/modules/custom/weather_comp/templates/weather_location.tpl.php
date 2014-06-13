<div class="location">
  <h2><?php print $data->name; ?></h2>
  <div class="temperature"><?php print weather_comp_k_to_f($data->main->temp); ?> &deg;F (<?php print weather_comp_k_to_f($data->main->temp_min, TRUE) .'-' . weather_comp_k_to_f($data->main->temp_max, TRUE); ?>)</div>
  <div class="wind"><?php print $data->wind->speed; ?> mph</div>


</div>

<?php
print_r($data);
