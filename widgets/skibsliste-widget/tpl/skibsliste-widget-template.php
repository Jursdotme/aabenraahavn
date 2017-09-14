<?php
$list_type = $instance['list_type'];
$json = file_get_contents('http://94.138.77.124:88');
    if ($json) {

      $list = json_decode($json);
      if ($list) {
        echo '<div id="skibsliste" class="skibsliste '.$list_type.'">';
        echo '<div id="skibsliste_inner" class="scroll_wrapper">';
        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<th>' . __('Quay', 'skibsliste') . '</th>';
        echo '<th>' . __('Facility', 'skibsliste') . '</th>';
        echo '<th>' . __('Shipname', 'skibsliste') . '</th>';

        if ($list_type == "full") {
          echo '<th>' . __('IMO<br>Number', 'skibsliste') . '</th>';
          echo '<th>' . __('Cargo', 'skibsliste') . '</th>';
          echo '<th>' . __('Recipient', 'skibsliste') . '</th>';
        }

        echo '<th>' . __('ETA', 'skibsliste') . '</th>';
        echo '<th>' . __('Status', 'skibsliste') . '</th>';
        echo '<th>' . __('ETD', 'skibsliste') . '</th>';

        if ($list_type == "full") {
          echo '<th>' . __('BT', 'skibsliste') . '</th>';
          echo '<th>' . __('LOA', 'skibsliste') . '</th>';
          echo '<th>' . __('DW', 'skibsliste') . '</th>';
        }

        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($list as $key => $data) {
            echo '<tr>';

            echo '<td>';
              echo $data->{'Quay No_'};
            echo '</td>';
            echo '<td>';
              echo str_replace('000', '', $data->{'Position in Port'});
            echo '</td>';
            echo '<td>';
              echo ($data->{'Description'});
            echo '</td>';

            if ($list_type == "full") {
              echo '<td>';
                echo $data->{'IMO'};
              echo '</td>';
              echo '<td>';
                echo ($data->{'Ship Cargo'});
              echo '</td>';
              echo '<td>';
                echo ($data->{'Name'});
              echo '</td>';
            }

            echo '<td>';
              //echo $data->{'Status'};
              if ($data->{'Status'} == "0") {
                echo date("d-m-Y",strtotime($data->{'Expected Arrival Date'})) . ' : ' . date("H:i",strtotime($data->{'Expected Time of Arrival'}));
              } else {
                echo date("d-m-Y",strtotime($data->{'Arrival Date'})) . ' : ' . date("H:i",strtotime($data->{'Time of Arrival'}));
              }
            echo '</td>';
            echo '<td>';
              //echo $data->{'Status'};
              if ($data->{'Status'} == "0") {
                echo __('Estimated berth', 'skibsliste');
              } else if ($data->{'Status'} == "1") {
                echo __('Docked', 'skibsliste');
              } else {
                echo __('Undocked', 'skibsliste');
              }
            echo '</td>';
            echo '<td>';
              echo date("d-m-Y",strtotime($data->{'Expected Departure Date'})) . ' : ' . date("H:i",strtotime($data->{'Expected Time of Departure'}));
            echo '</td>';

            if ($list_type == "full") {
              echo '<td>';
                echo $data->{'BRT_BT 2'};
              echo '</td>';
              echo '<td>';
                echo $data->{'Length'};
              echo '</td>';
              echo '<td>';
                echo $data->{'TDW 2'};
              echo '</td>';
            }

            // echo '<td>';
            //   echo $data->{'No_'};
            // echo '</td>';
            // echo '<td>';
            //   echo $data->{'Ship No_'};
            // echo '</td>';
            // echo '<td>';
            //   echo $data->{'ISPS Document Received'};
            // echo '</td>';
            // echo '<td>';
            //   echo $data->{'Broker No_'};
            // echo '</td>';
            // echo '<td>';
            //   echo ($data->{'Broker Name'});
            // echo '</td>';
            // echo '<td>';
            //   echo ($data->{'Arrival from City'});
            // echo '</td>';
            // echo '<td>';
            //   echo ($data->{'Arrival from City Code'});
            // echo '</td>';
            //
            // echo '<td>';
            //   echo ($data->{'Departure for City'});
            // echo '</td>';
            // echo '<td>';
            //   echo ($data->{'Departure for City Code'});
            // echo '</td>';
            // echo '<td>';
            //   echo ($data->{'Cargo Volume Nature'});
            // echo '</td>';
            //
            // echo '<td>';
            //   echo $data->{'Quantity'};
            // echo '</td>';

            // echo '<td>';
            //   echo $data->{'Planned Operation'};
            // echo '</td>';
            // echo '<td>';
            //   echo $data->{'CAP Purpose'};
            // echo '</td>';






            echo '</tr>';

        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
        echo '<p class="updated"><em>' . __('Updated every 15 min.', 'skibsliste') . '</em></p>';
        echo '<p class="descriptions">' . __('BT: Brutto tonnage', 'skibsliste') . '<br/>';
        echo '' . __('LOA: Length over all', 'skibsliste') . '<br/>';
        echo '' . __('DW: Deadweight', 'skibsliste') . '</p>';
        if ($list_type == "full") {
          echo '<a href="javascript:print_elm(\'skibsliste_inner\');" class="button print">Print Shiplist</a>';
        }

        echo '</div>';



      } else {
        echo '<div class="no-ships">' . __('There are currently no docked ships.', 'skibsliste') . '</div>';
      }
    }
?>
