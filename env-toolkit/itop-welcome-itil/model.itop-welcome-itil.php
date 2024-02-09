<?php
//
// File generated by ... on the 2024-02-09T14:10:24+0100
// Please do not edit manually
//

/**
 * Classes and menus for itop-welcome-itil (version 3.1.1)
 *
 * @author      iTop compiler
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//
// Menus
//
class MenuCreation_itop_welcome_itil extends ModuleHandlerAPI
{
	public static function OnMenuCreation()
	{
		global $__comp_menus__; // ensure that the global variable is indeed global !
		$__comp_menus__['WelcomeMenu'] = new MenuGroup('WelcomeMenu', 10, 'fas fa-home' , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['WelcomeMenuPage'] = new DashboardMenuNode('WelcomeMenuPage', __DIR__.'/welcomemenupage_dashboard.xml', $__comp_menus__['WelcomeMenu']->GetIndex(), 10 , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['AdminTools'] = new MenuGroup('AdminTools', 80, 'fas fa-tools' , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['AuditCategories'] = new DashboardMenuNode('AuditCategories', __DIR__.'/auditcategories_dashboard.xml', $__comp_menus__['AdminTools']->GetIndex(), 20 , 'AuditCategory', UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
	}
} // class MenuCreation_itop_welcome_itil
