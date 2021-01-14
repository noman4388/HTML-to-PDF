<?php
require_once('dompdf/dompdf_config.inc.php');
$html = '<p align="right"><img width="238" height="120" src="logo.png" alt="etics-insurance-000.png" /></p>
<p><strong>&nbsp;</strong></p>
<p><strong>INSURANCE CERTIFICATE</strong><strong><br />
  </strong><strong>relevant  to the Insurance contract No. 1180000102<br />
    Insolvency insurance</strong><strong> </strong><strong> </strong></p>
<p><strong>&nbsp;</strong></p>
<p><strong>Insurer: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ERV  Evropsk&aacute; poji&scaron;&#357;ovna, a. s. </strong> <br />
  based K&#345;i&#382;&iacute;kova 237/36a, <br />
  186 00 Praha 8 <br />
  Reg. No. 492 40 196 </p>
<p>&nbsp;</p>
<p><strong>Policyholder: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pole  Position Travel SE </strong> <br />
  based Kaprova 5/19, <br />
  110 00 Praha 1 - Josefov <br />
  Reg. No. 284 77 529 </p>
<p>&nbsp;</p>
<p>The insurer confirms, that the above-mentioned tour operator  is insured against a bankruptcy by course of law No. 159/1999 Sb., on certain  terms for conducting business in the field of the travel industry, as amended. <br />
  The insurance covers scenarios where the Policyholder is  unable, due to its bankruptcy, to: </p>
<ol>
  <li>provide entitled persons with  transportation from a place of their stay abroad to the Czech Republic,  provided that such a transportation forms part of the tour; </li>
  <li>refund prepaid deposit to entitled  persons or the price of the tour, in the event that no tour has taken place; </li>
  <li>return, to entitled persons, the  difference between the amount paid for a tour and the price of the part of the  tour actually provided, in the event that only a part of the tour has taken  place. </li>
</ol>
<p><strong>&nbsp;</strong></p>
<p><strong>Insured from: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 12.  3. 2011 </strong></p>
<p><strong>The insurance is arranged for an unlimited period. </strong></p>
<p>This insurance is subject to the Insurance Conditions for  tour operators Insolvency Insurance and the insurance contract. </p>
<p>Prague, 20. 1. 2016 </p>
<p>&nbsp;</p>
<p><img width="270" height="124" src="signature.png" alt="etics-insurance-001.png" /> <br />
  &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;........&hellip;&hellip;.&hellip;&hellip;&hellip;&hellip;&hellip; <br />
  za ERV Evropskou poji&scaron;&#357;ovnu, a. s. <br />
  JUDr. Vladim&iacute;r Kraj&iacute;&#269;ek <br />
  general director </p>
  ';
    
   $dompdf = new DOMPDF();
   $dompdf->load_html($html);
   $dompdf->set_paper("A4", "Portrait");
   $dompdf->render();
   $dompdf->stream("pdfinfodata", array("Attachment" => false));	
 ?>