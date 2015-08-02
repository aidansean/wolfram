<?php
$title = 'Wolfram rules' ;
$stylesheets = array('style.css') ;
$js_scripts = array('functions.js') ;
include($_SERVER['FILE_PREFIX'] . '/_core/preamble.php') ;
?>
  <div id="content">  
    <div class="right">
      <div class='blurb'>
        <p id="p_rule"></p>
      </div>
    </div>
    <div id="wrapper_div"></div>
    <div class="right">
      <h3>Make a new pattern</h3>
      <div class='blurb'>
        <p>This page takes a simple rule and uses it to generate a pattern.  The colour of each cell depends on the colours of the cells above it in a way determined by the rule.</p>
        
        <p>
          <form action="" method="get">
            <table id="table_input">
              <tbody>
                <tr>
                  <th class="th_input">Rule: </th>
                  <td class="td_input"><input name="rule" id="input_rule"/></td>
                </tr>
                <tr>
                  <th class="th_input">Number of columns:</th>
                  <td class="td_input"><input name="n" id="input_n"/></td>
                </tr>
                <tr>
                  <th></th>
                  <td class="td_input" id="td_submit"><input type="submit"/></td>
                </tr>
            </table>
          </form>
        </p>
        
        <p>The rule takes the form of one dimensional array of size \(2^n\), where \(n\) is the number of neighbouring cells that are taken into account.  Each value in the rule corresponds to a different value of the bitmap.</p>
        
        <p>For example if a cell considers its two immediate neighbours and itself then it considers three cells in total, and there will be \(2^3=8\) possible outcomes.  The eight values in the rule will correspond to these values.</p>
        
        <p>For Sierpinski's triangle try the pattern <tt><a href="?rule=01011010">01011010</a></tt>.  <tt><a href="?rule=10000101">10000101</a></tt> is also quite pretty.</p>
        
        <p><a href="http://en.wikipedia.org/wiki/Elementary_cellular_automaton">Wikipedia page</a></p>
      </div>
    </div>
<?php foot() ; ?>
