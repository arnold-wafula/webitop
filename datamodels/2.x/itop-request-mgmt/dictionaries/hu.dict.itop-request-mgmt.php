<?php
/*
 * @copyright   Copyright (C) 2010-2023 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
Dict::Add('HU HU', 'Hungarian', 'Magyar', array(
	'Menu:RequestManagement' => 'Helpdesk',
	'Menu:RequestManagement+' => 'Kérelmek kezelése',
	'Menu:RequestManagementProvider' => 'Helpdesk szolgáltató',
	'Menu:RequestManagementProvider+' => 'Helpdesk provider~~',
	'Menu:UserRequest:Provider' => 'Szolgáltatónak átadott nyitott kérelmek',
	'Menu:UserRequest:Provider+' => 'Open requests transfered to provider~~',
	'Menu:UserRequest:Overview' => 'Áttekintő',
	'Menu:UserRequest:Overview+' => 'Overview~~',
	'Menu:NewUserRequest' => 'Új felhasználói kérelem',
	'Menu:NewUserRequest+' => 'Create a new user request ticket~~',
	'Menu:SearchUserRequests' => 'Felhasználó kérelem keresése',
	'Menu:SearchUserRequests+' => 'Search for user request tickets~~',
	'Menu:UserRequest:Shortcuts' => 'Gyorsgombok',
	'Menu:UserRequest:Shortcuts+' => '~~',
	'Menu:UserRequest:MyRequests' => 'Hozzám rendelt kérelmek',
	'Menu:UserRequest:MyRequests+' => 'Requests assigned to me (as Agent)~~',
	'Menu:UserRequest:MySupportRequests' => 'Támogatói kérelmeim',
	'Menu:UserRequest:MySupportRequests+' => 'My support calls~~',
	'Menu:UserRequest:EscalatedRequests' => 'Sürgős kérelmek',
	'Menu:UserRequest:EscalatedRequests+' => 'Hot requests~~',
	'Menu:UserRequest:OpenRequests' => 'Minden nyitott kérelem',
	'Menu:UserRequest:OpenRequests+' => 'All open requests~~',
	'UI:WelcomeMenu:MyAssignedCalls' => 'Hozzám rendelt kérelmek',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => 'Az utóbbi 14 nap kérelmei típusonként',
	'UI-RequestManagementOverview-Last-14-days' => 'Az utóbbi 14 nap kérelmei napi bontásban',
	'UI-RequestManagementOverview-OpenRequestByStatus' => 'Nyitott kérelmek állapotuk szerint',
	'UI-RequestManagementOverview-OpenRequestByAgent' => 'Nyitott kérelmek felelősönként',
	'UI-RequestManagementOverview-OpenRequestByType' => 'Nyitott kérelmek típusonként',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => 'Nyitott kérelmek szervezetenként',
	'Class:UserRequest:KnownErrorList' => 'Ismert hibák',
	'Class:UserRequest:KnownErrorList+' => 'Known Errors related to Functional CI linked to the current ticket~~',
	'Menu:UserRequest:MyWorkOrders' => 'Hozzám rendelt munkautasítások',
	'Menu:UserRequest:MyWorkOrders+' => 'All work orders assigned to me~~',
	'Class:Problem:KnownProblemList' => 'Ismert problémák',
	'Tickets:Related:OpenIncidents' => 'Nyitott incidensek',
));

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//
// Class: UserRequest
//

Dict::Add('HU HU', 'Hungarian', 'Magyar', array(
	'Class:UserRequest' => 'Felhasználói kérelem',
	'Class:UserRequest+' => '~~',
	'Class:UserRequest/Attribute:status' => 'Állapot',
	'Class:UserRequest/Attribute:status+' => '~~',
	'Class:UserRequest/Attribute:status/Value:new' => 'Új',
	'Class:UserRequest/Attribute:status/Value:new+' => '~~',
	'Class:UserRequest/Attribute:status/Value:escalated_tto' => 'Eszkalált TTO',
	'Class:UserRequest/Attribute:status/Value:escalated_tto+' => '~~',
	'Class:UserRequest/Attribute:status/Value:assigned' => 'Hozzárendelt',
	'Class:UserRequest/Attribute:status/Value:assigned+' => '~~',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr' => 'Eszkalált TTR',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr+' => '~~',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval' => 'Jóváhagyásra vár',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval+' => '~~',
	'Class:UserRequest/Attribute:status/Value:approved' => 'Jóváhagyva',
	'Class:UserRequest/Attribute:status/Value:approved+' => '~~',
	'Class:UserRequest/Attribute:status/Value:rejected' => 'Elutasítva',
	'Class:UserRequest/Attribute:status/Value:rejected+' => '~~',
	'Class:UserRequest/Attribute:status/Value:pending' => 'Folyamatban',
	'Class:UserRequest/Attribute:status/Value:pending+' => '~~',
	'Class:UserRequest/Attribute:status/Value:resolved' => 'Megoldva',
	'Class:UserRequest/Attribute:status/Value:resolved+' => '~~',
	'Class:UserRequest/Attribute:status/Value:closed' => 'Lezárt',
	'Class:UserRequest/Attribute:status/Value:closed+' => '~~',
	'Class:UserRequest/Attribute:request_type' => 'Kérelem típus',
	'Class:UserRequest/Attribute:request_type+' => '~~',
	'Class:UserRequest/Attribute:request_type/Value:incident' => 'Incidens',
	'Class:UserRequest/Attribute:request_type/Value:incident+' => 'Incident~~',
	'Class:UserRequest/Attribute:request_type/Value:service_request' => 'Szolgáltatás kérelem',
	'Class:UserRequest/Attribute:request_type/Value:service_request+' => 'Service request~~',
	'Class:UserRequest/Attribute:impact' => 'Hatása',
	'Class:UserRequest/Attribute:impact+' => '~~',
	'Class:UserRequest/Attribute:impact/Value:1' => 'Részlegre',
	'Class:UserRequest/Attribute:impact/Value:1+' => '~~',
	'Class:UserRequest/Attribute:impact/Value:2' => 'Szolgáltatásra',
	'Class:UserRequest/Attribute:impact/Value:2+' => '~~',
	'Class:UserRequest/Attribute:impact/Value:3' => 'Személyre',
	'Class:UserRequest/Attribute:impact/Value:3+' => '~~',
	'Class:UserRequest/Attribute:priority' => 'Prioritás',
	'Class:UserRequest/Attribute:priority+' => '~~',
	'Class:UserRequest/Attribute:priority/Value:1' => 'Kritikus',
	'Class:UserRequest/Attribute:priority/Value:1+' => 'critical~~',
	'Class:UserRequest/Attribute:priority/Value:2' => 'Magas',
	'Class:UserRequest/Attribute:priority/Value:2+' => 'high~~',
	'Class:UserRequest/Attribute:priority/Value:3' => 'Közepes',
	'Class:UserRequest/Attribute:priority/Value:3+' => 'medium~~',
	'Class:UserRequest/Attribute:priority/Value:4' => 'Alacsony',
	'Class:UserRequest/Attribute:priority/Value:4+' => 'low~~',
	'Class:UserRequest/Attribute:urgency' => 'Sürgősség',
	'Class:UserRequest/Attribute:urgency+' => '~~',
	'Class:UserRequest/Attribute:urgency/Value:1' => 'Nem várhat',
	'Class:UserRequest/Attribute:urgency/Value:1+' => 'critical~~',
	'Class:UserRequest/Attribute:urgency/Value:2' => 'Nagyon sürgős',
	'Class:UserRequest/Attribute:urgency/Value:2+' => 'high~~',
	'Class:UserRequest/Attribute:urgency/Value:3' => 'Sürgős',
	'Class:UserRequest/Attribute:urgency/Value:3+' => 'medium~~',
	'Class:UserRequest/Attribute:urgency/Value:4' => 'Nem sürgős',
	'Class:UserRequest/Attribute:urgency/Value:4+' => 'low~~',
	'Class:UserRequest/Attribute:origin' => 'Eredet',
	'Class:UserRequest/Attribute:origin+' => '~~',
	'Class:UserRequest/Attribute:origin/Value:in_person' => 'In-person~~',
	'Class:UserRequest/Attribute:origin/Value:in_person+' => 'Request created following a face-to-face discussion~~',
	'Class:UserRequest/Attribute:origin/Value:chat' => 'Chat~~',
	'Class:UserRequest/Attribute:origin/Value:chat+' => 'Request created following a chat discussion~~',
	'Class:UserRequest/Attribute:origin/Value:mail' => 'Email',
	'Class:UserRequest/Attribute:origin/Value:mail+' => 'email~~',
	'Class:UserRequest/Attribute:origin/Value:monitoring' => 'Felügyelet',
	'Class:UserRequest/Attribute:origin/Value:monitoring+' => 'monitoring~~',
	'Class:UserRequest/Attribute:origin/Value:phone' => 'Telefon',
	'Class:UserRequest/Attribute:origin/Value:phone+' => 'phone~~',
	'Class:UserRequest/Attribute:origin/Value:portal' => 'Portál',
	'Class:UserRequest/Attribute:origin/Value:portal+' => 'portal~~',
	'Class:UserRequest/Attribute:approver_id' => 'Jóváhagyó',
	'Class:UserRequest/Attribute:approver_id+' => '~~',
	'Class:UserRequest/Attribute:approver_email' => 'Jóváhagyó email címe',
	'Class:UserRequest/Attribute:approver_email+' => '~~',
	'Class:UserRequest/Attribute:service_id' => 'Szolgáltatás',
	'Class:UserRequest/Attribute:service_id+' => '~~',
	'Class:UserRequest/Attribute:service_name' => 'Szolgáltatás név',
	'Class:UserRequest/Attribute:service_name+' => '~~',
	'Class:UserRequest/Attribute:servicesubcategory_id' => 'Szolgáltatás alkategória',
	'Class:UserRequest/Attribute:servicesubcategory_id+' => '~~',
	'Class:UserRequest/Attribute:servicesubcategory_name' => 'Szolgáltatás alkategória név',
	'Class:UserRequest/Attribute:servicesubcategory_name+' => '~~',
	'Class:UserRequest/Attribute:escalation_flag' => 'Sürgős jelzés',
	'Class:UserRequest/Attribute:escalation_flag+' => '~~',
	'Class:UserRequest/Attribute:escalation_flag/Value:no' => 'Nem',
	'Class:UserRequest/Attribute:escalation_flag/Value:no+' => 'No~~',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes' => 'Igen',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes+' => 'Yes~~',
	'Class:UserRequest/Attribute:escalation_reason' => 'Sürgősségi ok',
	'Class:UserRequest/Attribute:escalation_reason+' => '~~',
	'Class:UserRequest/Attribute:assignment_date' => 'Megbízási dátum',
	'Class:UserRequest/Attribute:assignment_date+' => '~~',
	'Class:UserRequest/Attribute:resolution_date' => 'Megoldási dátum',
	'Class:UserRequest/Attribute:resolution_date+' => '~~',
	'Class:UserRequest/Attribute:last_pending_date' => 'Utolsó függőben lévő dátum',
	'Class:UserRequest/Attribute:last_pending_date+' => '~~',
	'Class:UserRequest/Attribute:cumulatedpending' => 'Kumulált függőben lévő',
	'Class:UserRequest/Attribute:cumulatedpending+' => '~~',
	'Class:UserRequest/Attribute:tto' => 'TTO',
	'Class:UserRequest/Attribute:tto+' => '~~',
	'Class:UserRequest/Attribute:ttr' => 'TTR',
	'Class:UserRequest/Attribute:ttr+' => '~~',
	'Class:UserRequest/Attribute:tto_escalation_deadline' => 'TTO határidő',
	'Class:UserRequest/Attribute:tto_escalation_deadline+' => '~~',
	'Class:UserRequest/Attribute:sla_tto_passed' => 'SLA TTO letelt',
	'Class:UserRequest/Attribute:sla_tto_passed+' => '~~',
	'Class:UserRequest/Attribute:sla_tto_over' => 'SLA TTO túllépett',
	'Class:UserRequest/Attribute:sla_tto_over+' => '~~',
	'Class:UserRequest/Attribute:ttr_escalation_deadline' => 'TTR határidő',
	'Class:UserRequest/Attribute:ttr_escalation_deadline+' => '~~',
	'Class:UserRequest/Attribute:sla_ttr_passed' => 'SLA TTR letelt',
	'Class:UserRequest/Attribute:sla_ttr_passed+' => '~~',
	'Class:UserRequest/Attribute:sla_ttr_over' => 'SLA TTR túllépett',
	'Class:UserRequest/Attribute:sla_ttr_over+' => '~~',
	'Class:UserRequest/Attribute:time_spent' => 'Időráfordítás',
	'Class:UserRequest/Attribute:time_spent+' => '~~',
	'Class:UserRequest/Attribute:resolution_code' => 'Megoldás kód',
	'Class:UserRequest/Attribute:resolution_code+' => '~~',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance' => 'Támogatás',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance+' => 'assistance~~',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed' => 'Programhiba javítás',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed+' => 'bug fixed~~',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair' => 'Hardver javítás',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair+' => 'hardware repair~~',
	'Class:UserRequest/Attribute:resolution_code/Value:other' => 'egyéb',
	'Class:UserRequest/Attribute:resolution_code/Value:other+' => 'other~~',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch' => 'Szoftverfrissítés',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch+' => 'software patch~~',
	'Class:UserRequest/Attribute:resolution_code/Value:system update' => 'Rendszerfrissítés',
	'Class:UserRequest/Attribute:resolution_code/Value:system update+' => 'system update~~',
	'Class:UserRequest/Attribute:resolution_code/Value:training' => 'Oktatás',
	'Class:UserRequest/Attribute:resolution_code/Value:training+' => 'training~~',
	'Class:UserRequest/Attribute:solution' => 'Megoldás',
	'Class:UserRequest/Attribute:solution+' => '~~',
	'Class:UserRequest/Attribute:pending_reason' => 'Függőben lévőség oka',
	'Class:UserRequest/Attribute:pending_reason+' => '~~',
	'Class:UserRequest/Attribute:parent_request_id' => 'Szülő kérelem',
	'Class:UserRequest/Attribute:parent_request_id+' => '~~',
	'Class:UserRequest/Attribute:parent_request_ref' => 'Ref. kérelem',
	'Class:UserRequest/Attribute:parent_request_ref+' => '~~',
	'Class:UserRequest/Attribute:parent_problem_id' => 'Szülő probléma',
	'Class:UserRequest/Attribute:parent_problem_id+' => '~~',
	'Class:UserRequest/Attribute:parent_problem_ref' => 'Ref. probléma',
	'Class:UserRequest/Attribute:parent_problem_ref+' => '~~',
	'Class:UserRequest/Attribute:parent_change_id' => 'Szülő változás',
	'Class:UserRequest/Attribute:parent_change_id+' => '~~',
	'Class:UserRequest/Attribute:parent_change_ref' => 'Ref. változás',
	'Class:UserRequest/Attribute:parent_change_ref+' => '~~',
	'Class:UserRequest/Attribute:related_request_list' => 'Gyermek kérelem',
	'Class:UserRequest/Attribute:related_request_list+' => 'All the requests that are linked to this parent request~~',
	'Class:UserRequest/Attribute:public_log' => 'Nyilvános napló',
	'Class:UserRequest/Attribute:public_log+' => '~~',
	'Class:UserRequest/Attribute:user_satisfaction' => 'Felhasználói elégedettség',
	'Class:UserRequest/Attribute:user_satisfaction+' => '~~',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1' => 'Nagyon elégedett',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1+' => 'Very satisfied~~',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2' => 'Viszonylag elégedett',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2+' => 'Fairly statisfied~~',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3' => 'Inkább elégedetlen',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3+' => 'Inkább elégedetlen',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4' => 'Nagyon elégedetlen',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4+' => 'Very Dissatisfied~~',
	'Class:UserRequest/Attribute:user_comment' => 'Felhasználói megjegyzés',
	'Class:UserRequest/Attribute:user_comment+' => '~~',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname' => 'parent_request_id_friendlyname',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname+' => '~~',
	'Class:UserRequest/Stimulus:ev_assign' => 'Hozzárendelés',
	'Class:UserRequest/Stimulus:ev_assign+' => '~~',
	'Class:UserRequest/Stimulus:ev_reassign' => 'Újra hozzárendelés',
	'Class:UserRequest/Stimulus:ev_reassign+' => '~~',
	'Class:UserRequest/Stimulus:ev_approve' => 'Jóváhagyás',
	'Class:UserRequest/Stimulus:ev_approve+' => '~~',
	'Class:UserRequest/Stimulus:ev_reject' => 'Elutasítás',
	'Class:UserRequest/Stimulus:ev_reject+' => '~~',
	'Class:UserRequest/Stimulus:ev_pending' => 'Függőben',
	'Class:UserRequest/Stimulus:ev_pending+' => '~~',
	'Class:UserRequest/Stimulus:ev_timeout' => 'Időtúllépés',
	'Class:UserRequest/Stimulus:ev_timeout+' => '~~',
	'Class:UserRequest/Stimulus:ev_autoresolve' => 'Automatikus megoldás',
	'Class:UserRequest/Stimulus:ev_autoresolve+' => '~~',
	'Class:UserRequest/Stimulus:ev_autoclose' => 'Automatikus lezárás',
	'Class:UserRequest/Stimulus:ev_autoclose+' => '~~',
	'Class:UserRequest/Stimulus:ev_resolve' => 'Megjelölve megoldottként',
	'Class:UserRequest/Stimulus:ev_resolve+' => '~~',
	'Class:UserRequest/Stimulus:ev_close' => 'Kérelem lezárása',
	'Class:UserRequest/Stimulus:ev_close+' => '~~',
	'Class:UserRequest/Stimulus:ev_reopen' => 'Újranyitás',
	'Class:UserRequest/Stimulus:ev_reopen+' => '~~',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => 'Jóváhagyásra vár',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => '~~',
	'Class:UserRequest/Error:CannotAssignParentRequestIdToSelf' => 'Nem lehet hozzárendelni a szülő kérelmet magához a kérelemhez',
));


Dict::Add('HU HU', 'Hungarian', 'Magyar', array(
	'Portal:TitleDetailsFor_Request' => 'Kérelem részletei',
	'Portal:ButtonUpdate' => 'Frissítés',
	'Portal:ButtonClose' => 'Lezárás',
	'Portal:ButtonReopen' => 'Újranyitás',
	'Portal:ShowServices' => 'Szolgáltatáskatalógus',
	'Portal:SelectRequestType' => 'Válasszon egy kérelem típust',
	'Portal:SelectServiceElementFrom_Service' => 'Válasszon egy szolgáltatás elemet %1$s -hez',
	'Portal:ListServices' => 'Szolgáltatások listája',
	'Portal:TitleDetailsFor_Service' => 'Szolgáltatások részletei',
	'Portal:Button:CreateRequestFromService' => 'Kérelem létrehozása ehhez a szolgáltatáshoz',
	'Portal:ListOpenRequests' => 'Nyitott kérelmek listája',
	'Portal:UserRequest:MoreInfo' => 'További információ',
	'Portal:Details-Service-Element' => 'Szolgáltatás elemek',
	'Portal:NoClosedTicket' => 'Nincs lezárt kérelem',
	'Portal:NoService' => '~~',
	'Portal:ListOpenProblems' => 'Folyamatban lévő problémák',
	'Portal:ShowProblem' => 'Problémák',
	'Portal:ShowFaqs' => 'Tudástárak',
	'Portal:NoOpenProblem' => 'Nincs nyitott probléma',
	'Portal:SelectLanguage' => 'Nyelv megváltoztatása',
	'Portal:LanguageChangedTo_Lang' => 'A nyelv átváltva',
	'Portal:ChooseYourFavoriteLanguage' => 'Válassza ki a kívánt nyelvet',
	'Class:UserRequest/Method:ResolveChildTickets' => 'ResolveChildTickets',
	'Class:UserRequest/Method:ResolveChildTickets+' => 'A felbontás kaszkádosítása a gyermek kérésekhez (ev_autoresolve), és a kérés következő jellemzőinek összehangolása: szolgáltatás, csapat, felelős, felbontási információ.',
));


Dict::Add('HU HU', 'Hungarian', 'Magyar', array(
	'Organization:Overview:UserRequests' => 'Felhasználói kérelmek ebből a szervezeti egységből',
	'Organization:Overview:MyUserRequests' => 'Saját kérelmek ebből a szervezeti egységből',
	'Organization:Overview:Tickets' => 'Hibajegyek ebből a szervezeti egységből',
));
