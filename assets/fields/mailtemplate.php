<?php

/**
 * @version $Id: 1.0 2015-09-25 : 11:21:00
 * @package Manage Tourism information
 * @copyright Copyright (C) 2003- 2015 Pooranee Inspirations, All rights reserved.
 * @license http://www.gnu.org/licenses GNU/GPL
 * @author Pooranee
 * @author info@pooranee.lk
 * @developer I.P.Weerasundara, M.M.Ramanaya, Sandun Gunathilaka 
 *
 *
 */
 
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

jimport('joomla.form.formfield');

class JFormFieldMailtemplate extends JFormField {

    protected $type = 'Mailtemplate';

    // getLabel() left out

    public function getInput() {



            return '
<table width="600px" align="center" >
<tbody bgcolor="#E6E6FA"><tr><td>

<table width="600px" align="center" bgcolor="#B22222">
<tbody>
<tr>
<td colspan="2">

<table style="padding-bottom: 15px; padding-top: 15px;" width="800px" bgcolor="#FF2D7E">
<tbody><tr bgcolor="#FF2D7E">
<td style="text-align: center; font-size: 40px; font-weight: bold; font-style: italic; color: #ffffff;" height="60">Contact Message Email</td>
</tr>
</tbody>
</table>
</td>
</tr>

<tr>
<td align="center" style="padding-top: 20px;" colspan="2"> <h3>User mail subject</h3> </td>
</tr>
<tr>
<td style="padding-top: 20px;" colspan="2"> </td>
</tr>
<tr>
<td> </td>
<td style="padding-left: 140px; padding-bottom: 20px; padding-right: 140px;" valign="middle">Dear Admin,</td>
</tr>
<tr>
<td> </td>
<td style="padding-left: 140px; padding-right: 140px;" valign="middle">
<p>User message body.</p>
</td>
</tr>
<tr>
<td> </td>
<td style="padding-left: 140px; padding-top: 20px; padding-bottom: 25px;" valign="middle">Best regards,<br />Username,<br/>User phone no</td>
</tr>

<tr bgcolor="#FF2D7E">
<td style="padding-top: 15px; color: #ffffff; padding-bottom: 15px; font-size: 13px;" colspan="2" align="center"><strong>Use of this website constitutes acceptance of the your site Terms &amp; Conditions and Privacy Policy <br /> © Copyright 2016 - your company - All rights reserved.</strong></td>
</tr>
<tr bgcolor="#FF2D7E">
<td colspan="2"> </td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
    ';
    }
}
