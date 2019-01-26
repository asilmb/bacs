<?php
return [
    'oBackendAll' => [
        'type' => 2,
        'description' => 'Возможность авторизации на уровне ядра ',
    ],
    'rAdministrator' => [
        'type' => 1,
        'description' => 'Администратор системы',
        'children' => [
            'rNalInsp',
            'rUser',
            'rUnknownUser',
            'rResmiUnknownUser',
            'rMerchantBilling',
            'rMerchant',
            'rMerchantSmpp',
            'rMerchantBeelineDirectPayment',
            'rAgent',
            'rAgentSmpp',
            'rSubAgent',
            'rEmitent',
            'rEmitentMarketolog',
            'rEmitentOperational',
            'rEmitentPayWatcher',
            'rModerator',
            'rMarketolog',
            'rGuest',
            'rAuthorized',
            'rAll',
            'rOperatorSPP',
            'rJustRegistered',
            'rContentManager',
            'rTechSpecialist',
            'rMobileDeveloper',
            'rOperatorMT100',
            'rFinanceSpecialist',
            'rWPFinanceSpecialist',
            'rTextPagesManager',
            'rPromoter',
            'rCron',
            'rSubSubAgent',
            'rSubSubAgentsManager',
            'rPromoManager',
            'rEmployee',
            'rMerchantSmart',
            'rTester',
            'rPseudoUser',
            'rLoansRepaymentSpecialist',
            'rUserNotWorksheet',
            'rSecurityOfficer',
            'rAddresslessTransferUser',
            'rTransferUser',
            'rBPAdmin',
            'rBPSupportUser',
            'rResmiAdmin',
            'rResmiSPPAdmin',
            'rResmiSupportUser',
            'rAccountManager',
            'rPostExpressAdmin',
            'rPostExpressOperator',
            'rViewPostExpressReports',
            'rPartnerAuditor',
            'rSubagentAuditor',
            'rAgentOperator',
            'rMerchantOperator',
            'rSubAgentOperator',
            'rSubagentReports',
            'rBrokerAccount',
            'rSubAgentWithCashOut',
            'rSubMerchant',
            'oBackendAll',
            'oGeoCityManage',
            'oGeoCountryManage',
            'oGeoCurrencyManage',
            'oServiceCategoryManage',
            'oRestClientAll',
            'oUserProfileAll',
            'oActiveFieldManage',
            'oActiveTypeManage',
            'oGeoRegionManage',
            'notify.transport.manage',
            'oArticlePostManage',
            'oRbacManage',
            'oGithubManage',
            'oOfflineManage',
            'oLogreaderManage',
            'oGiiManage',
            'oLangManage',
            'oCleanerManage',
            'oNotifyManage',
            'oAppConfig',
            'oGuideModify',
            'oVendorManage',
            'oACBRepayOperation',
            'oAccessAdminPanel',
            'oAddService',
            'oAnySubjectPasswordReset',
            'oAssignRole',
            'oBeelineUSSD',
            'oBillingCancelOperation',
            'oBillingRepayOperation',
            'oBlockOperation',
            'oBlockPayment',
            'oBlockUser',
            'oChangeType',
            'oCheckInvoices',
            'oClearFavorites',
            'oClearSubjectCache',
            'oCloseSubject',
            'oCreateAgent',
            'oCreateCommission',
            'oCreateEmitent',
            'oCreateEmitentAdmin',
            'oCreateLimit',
            'oCreateMerchant',
            'oCreateModerator',
            'oCreateNalogoviyInspector',
            'oCreatePrepaidCard',
            'oCreateSubAgent',
            'oCreateSubSubAgent',
            'oDeleteLimit',
            'oDeleteService',
            'oDeleteSubject',
            'oEditLandingForPromo',
            'oEditMerchant',
            'oEditServicesListForPromo',
            'oEditSynonym',
            'oEditTags',
            'oGeneratePromoCodes',
            'oGetAtmStatus',
            'oGetBalanceInMerchantSystem',
            'oGetIpWhitelist',
            'oGetServices',
            'oGetStorningOperations',
            'oGetSubjectParent',
            'oGetSubjectType',
            'oJuridicalSubjectPasswordChange',
            'oJuridicalSubjectProfileEdit',
            'oLandingPagesAdd',
            'oLandingPagesDelete',
            'oLandingPagesEdit',
            'oLandingPagesInsertJS',
            'oLandingPagesList',
            'oListCommission',
            'oManageRedirections',
            'oMetaTagsEdit',
            'oMobileRefund',
            'oMobileRefundAny',
            'oModifyCommission',
            'oModifyService',
            'oNotifyInvoiceMerchant',
            'oOlimpRefund',
            'oOlimpRefundAny',
            'oPasswordChangeReportForAnyUser',
            'oPasswordReset',
            'oRbacEdit',
            'oReportBirthday',
            'oReportBlockedUsers',
            'oReportBlocking',
            'oReportCommissions',
            'oReportConfirmedCommissions',
            'oReportIdentifications',
            'oReportJuridicalSubjects',
            'oReportMerchants',
            'oReportMoneyIssue',
            'oReportMoneyRedemption',
            'oReportMT100',
            'oReportOperDay',
            'oReportPasswordReset',
            'oReportRegistrations',
            'oReportTransfers',
            'oReportVipSubjects',
            'oReverseTransfer',
            'oSendPromoCodes',
            'oServiceEdit',
            'oSetIpWhitelist',
            'oSetIpWhitelistAny',
            'oSetIpWhitelistSelf',
            'oSetOtpSecret',
            'oSetOtpSecretAny',
            'oSetOtpSecretSelf',
            'oSetSubjectParent',
            'oTextPagesAdd',
            'oTextPagesDelete',
            'oTextPagesEdit',
            'oTextPagesInsertJS',
            'oUnblockIP',
            'oUnblockUser',
            'oViewBankServicesConfig',
            'oViewErrorDetails',
            'oViewModeratingServices',
            'oViewUserCount',
            'oVipSubjectListModify',
            'oWithdrawalToBankAccountDataWork',
            'oWorkWithRedemptionDetails',
            'oZWalletReturn',
            'tViewLogs',
            'oServiceServiceManage',
            'oGetSupportFilterData',
        ],
    ],
    'oGeoCityManage' => [
        'type' => 2,
        'description' => 'Возможность редактирования городов на уровне ядра',
    ],
    'oGeoCountryManage' => [
        'type' => 2,
        'description' => 'Возможность редактирования стран на уровне ядра',
    ],
    'oGeoCurrencyManage' => [
        'type' => 2,
        'description' => 'Возможность редактирования валют на уровне ядра',
    ],
    'oServiceCategoryManage' => [
        'type' => 2,
        'description' => 'Возможность редактирования сервис-категорий на уровне ядра ',
    ],
    'oRestClientAll' => [
        'type' => 2,
        'description' => 'Возможность взаимодействия с Rest - клиентом на уровне ядра',
    ],
    'oServiceServiceManage' => [
        'type' => 2,
        'description' => 'Возможность получения данных по сервисам на уровне ядра',
    ],
    'oUserProfileAll' => [
        'type' => 2,
    ],
    'oActiveFieldManage' => [
        'type' => 2,
    ],
    'oActiveTypeManage' => [
        'type' => 2,
    ],
    'oGeoRegionManage' => [
        'type' => 2,
        'description' => 'Возможность редактирования регионов на уровне ядра',
    ],
    'notify.transport.manage' => [
        'type' => 2,
    ],
    'oArticlePostManage' => [
        'type' => 2,
    ],
    'oArticleDeleteManage' => [
        'type' => 2,
    ],
    'oOfflineManage' => [
        'type' => 2,
        'description' => 'Возможность отключения услуг на уровне ядра',
    ],
    'oRbacManage' => [
        'type' => 2,
        'description' => 'Возможность редактирования Rbac на уровне ядра',
    ],
    'oGithubManage' => [
        'type' => 2,
    ],
    'oLogreaderManage' => [
        'type' => 2,
        'description' => 'Возможность чтения log - данных из БД на уровне ядра',
    ],
    'oGiiManage' => [
        'type' => 2,
        'description' => 'Возможность миграции на уровне ядра ',
    ],
    'oLangManage' => [
        'type' => 2,
    ],
    'oCleanerManage' => [
        'type' => 2,
        'description' => 'Возможность чистки кэш-а на уровне ядра',
    ],
    'oNotifyManage' => [
        'type' => 2,
        'description' => 'Возможность управления (Ядро)',
    ],
    'oAppConfig' => [
        'type' => 2,
        'description' => 'Возможность редактирования конфигурации на уровне ядра',
    ],
    'oGuideModify' => [
        'type' => 2,
        'ruleName' => 'isWritable',
    ],
    'oVendorManage' => [
        'type' => 2,
        'description' => 'Управление композер-пакетами',
    ],
    'oACBRepayOperation' => [
        'type' => 2,
        'description' => 'Перепроведение операции покупки валюты в ACB',
    ],
    'oAcceptAllOrders' => [
        'type' => 2,
        'description' => 'Принять все заказы разом',
    ],
    'oAcceptTransferRequest' => [
        'type' => 2,
        'description' => 'Принять запрос на перевод от пользователя',
    ],
    'oAccessAdminPanel' => [
        'type' => 2,
        'description' => 'Доступ к панели администрирования',
    ],
    'oAccessBeelineAdminCabinet' => [
        'type' => 2,
        'description' => 'Доступ к кабинету администратора Билайн',
    ],
    'oAccessBookmakerSppCabinet' => [
        'type' => 2,
        'description' => 'Доступ в кабинет специалиста СПП Олимп/1xBet',
    ],
    'oAccessFinancialCabinet' => [
        'type' => 2,
        'description' => 'Доступ к кабинету финансиста',
    ],
    'oAccessKcellAdminCabinet' => [
        'type' => 2,
        'description' => 'Доступ к кабинету администратора Кселл',
    ],
    'oAccessMarketologCabinet' => [
        'type' => 2,
        'description' => 'Доступ к кабинету маркетолога',
    ],
    'oAccessMerchantAdminCabinet' => [
        'type' => 2,
        'description' => 'Доступ в кабинет партнера - платформы для мерчантов (маркетплейса)',
        'children' => [
            'oViewParentsChildrenOperations',
        ],
    ],
    'oAccessPartnerCabinet' => [
        'type' => 2,
        'description' => 'Доступ в кабинет партнёра',
    ],
    'oAccessResmiAdminCabinet' => [
        'type' => 2,
        'description' => 'Доступ к кабинету администратора Ресми',
    ],
    'oAccessResmiMarketologCabinet' => [
        'type' => 2,
        'description' => 'Доступ к кабинету маркетолога Resmi',
    ],
    'oAccessResmiSppCabinet' => [
        'type' => 2,
        'description' => 'Доступ к кабинету тех. поддержки Ресми',
    ],
    'oActivateCommission' => [
        'type' => 2,
        'description' => 'Активировать комиссию',
    ],
    'oAddCity' => [
        'type' => 2,
        'description' => 'Добавление города',
    ],
    'oAddCountry' => [
        'type' => 2,
        'description' => 'Добавление страны',
    ],
    'oAddEventParticipant' => [
        'type' => 2,
        'description' => 'Добавление пользователя в акцию',
    ],
    'oAddEventParticipants' => [
        'type' => 2,
        'description' => 'Добавление пользователей массивом',
    ],
    'oAddEventService' => [
        'type' => 2,
        'description' => 'Добавление сервиса к акции',
    ],
    'oAddEventSubjectType' => [
        'type' => 2,
        'description' => 'Добавление в акцию SubjectType',
    ],
    'oAddOperationDescription' => [
        'type' => 2,
        'description' => 'Добавление комментария к операции',
    ],
    'oAddresslessTransferUserOperations' => [
        'type' => 2,
        'description' => 'Оплата с помощью безадресного перевода',
    ],
    'oAddService' => [
        'type' => 2,
        'description' => 'Создание сервиса',
    ],
    'oAddServiceGroup' => [
        'type' => 2,
        'description' => 'Добавление группы услуг',
    ],
    'oAgentKvitan' => [
        'type' => 2,
        'description' => 'Право квитовать гашение агентов',
    ],
    'oAnySubjectPasswordReset' => [
        'type' => 2,
        'description' => 'Сброс пароля для любого пользователя',
    ],
    'oAssignRole' => [
        'type' => 2,
        'description' => 'Присвоение роли',
    ],
    'oAuthorizedActions' => [
        'type' => 2,
        'description' => 'Права для всех вошедших пользователей системы',
    ],
    'oBeelineBlockUser' => [
        'type' => 2,
        'description' => 'Блокировка пользователя СПП портала «Билайн»',
    ],
    'oBeelinePasswordReset' => [
        'type' => 2,
        'description' => 'Сброс пароля сотрудника СПП портала «Билайн»',
    ],
    'oBeelineSMSNotification' => [
        'type' => 2,
        'description' => 'Отправка СМС через шлюз Билайн',
    ],
    'oBeelineUnblockUser' => [
        'type' => 2,
        'description' => 'Разблокировка сотрудника СПП портала «Билайн»',
    ],
    'oBeelineUSSD' => [
        'type' => 2,
        'description' => 'The right to invoke BeelineUSSDOperation',
    ],
    'oBillingCancelOperation' => [
        'type' => 2,
        'description' => 'Отмена биллинговых операций',
    ],
    'oBillingRepayOperation' => [
        'type' => 2,
        'description' => 'Перепроведение операции в биллинге',
    ],
    'oBlockOperation' => [
        'type' => 2,
        'description' => 'Блокировка денежной операции',
    ],
    'oBlockPayment' => [
        'type' => 2,
        'description' => 'Блокирование перевода, платежа',
    ],
    'oBlockUser' => [
        'type' => 2,
        'description' => 'Блокировка пользователя',
    ],
    'oBrokerWithdraw' => [
        'type' => 2,
        'description' => 'Списание с брокера на кошелёк wooppay',
    ],
    'oCancelBankTransfer' => [
        'type' => 2,
        'description' => 'Отмена операции перевода на банковский счет',
    ],
    'oCancelIncomingOperation' => [
        'type' => 2,
        'description' => 'Отмена входящей операции',
    ],
    'oCancelOperation' => [
        'type' => 2,
        'description' => 'Отмена операции',
    ],
    'oCancelWaitingOperation' => [
        'type' => 2,
        'description' => 'Отмена операции со статусом waiting',
    ],
    'oChangeCommissionStatus' => [
        'type' => 2,
        'description' => 'Смена статуса комиссии',
    ],
    'oChangeOperationOwner' => [
        'type' => 2,
        'description' => 'Возможность смены владельца любой операции',
    ],
    'oChangeOperationsPaymentAccount' => [
        'type' => 2,
        'description' => 'Смена платежного аккаунта в операции платежа',
    ],
    'oChangeOperationStatus' => [
        'type' => 2,
        'description' => 'Смена статуса операции (некое спец.апи для неведомого партнера)',
    ],
    'oChangeStatus' => [
        'type' => 2,
        'description' => 'Смена статуса субъекта',
    ],
    'oChangeSubjectStatusToActive' => [
        'type' => 2,
        'description' => 'Смена статуса субъекта на Действующий',
    ],
    'oChangeSubjectStatusToCreated' => [
        'type' => 2,
        'description' => 'Смена статуса субъекта на Создан',
    ],
    'oChangeSubjectStatusToModerating' => [
        'type' => 2,
        'description' => 'Смена статуса субъекта на На рассмотрении',
    ],
    'oChangeType' => [
        'type' => 2,
        'description' => 'Смена типа пользователя',
    ],
    'oCheckDocument' => [
        'type' => 2,
        'description' => 'Проверка документа ПШЭП',
    ],
    'oCheckHasEpayPercent0' => [
        'type' => 2,
        'description' => 'Проверяет разрешена ли оплата инвойсов мерчанта через epay',
    ],
    'oCheckInvoices' => [
        'type' => 2,
        'description' => 'Проверка статуса инвойсов',
    ],
    'oClearFavorites' => [
        'type' => 2,
        'description' => 'Очистка невалидных записей избранного',
    ],
    'oClearSubjectCache' => [
        'type' => 2,
        'description' => 'Очистка кэша субъектов',
    ],
    'oCloseSubject' => [
        'type' => 2,
        'description' => 'Закрытие субъекта',
    ],
    'oCommentEvent' => [
        'type' => 2,
        'description' => 'Комментировать событие',
    ],
    'oCommentWrite' => [
        'type' => 2,
        'description' => 'Написание комментариев к отзывам',
    ],
    'oCompleteRegistration' => [
        'type' => 2,
        'description' => 'Завершение регистрации',
    ],
    'oCompleteWithdrawal' => [
        'type' => 2,
        'description' => 'Проведение операций вывода на карту',
    ],
    'oConfirmBankTransfer' => [
        'type' => 2,
        'description' => 'Проведение операции перевода на банковский счет',
    ],
    'oConfirmChildOperation' => [
        'type' => 2,
        'description' => 'Подтверждение операции потомков',
    ],
    'oConfirmCommission' => [
        'type' => 2,
        'description' => 'Подтвердить комиссию',
    ],
    'oConfirmInvoiceBySMS' => [
        'type' => 2,
        'description' => 'Подтверждение инвойса по СМС',
    ],
    'oConfirmInvoiceSMS' => [
        'type' => 2,
        'description' => 'Право на подтверждение операций, оплачиваемых посредством СМС',
    ],
    'oConfirmOperation' => [
        'type' => 2,
        'description' => 'Подтверждение операции',
    ],
    'oConfirmOperationWithSpecialist' => [
        'type' => 2,
        'description' => 'При подтверждении операции специалист берется из операции',
    ],
    'oConfirmOtherOperations' => [
        'type' => 2,
        'description' => 'Подтверждение операции других пользователей',
    ],
    'oCorrectStatisticsData' => [
        'type' => 2,
        'description' => 'Возможность корректировать данные в статистике',
    ],
    'oCreateAgent' => [
        'type' => 2,
        'description' => 'Создание пользователя - агента',
    ],
    'oCreateBPSupportUser' => [
        'type' => 2,
        'description' => 'Создание пользователя СПП портала «Билайн»',
    ],
    'oCreateCommission' => [
        'type' => 2,
        'description' => 'Создание комиссии',
    ],
    'oCreateDiscount' => [
        'type' => 2,
        'description' => 'Создание скидки',
    ],
    'oCreateEmitent' => [
        'type' => 2,
        'description' => 'Право регистрации эмитента',
    ],
    'oCreateEmitentAdmin' => [
        'type' => 2,
        'description' => 'Создание пользователя - эмитента-администратора',
    ],
    'oCreateEvent' => [
        'type' => 2,
        'description' => 'Создание акции Cashback',
    ],
    'oCreateEventCashback' => [
        'type' => 2,
        'description' => 'Создание cashback для акции',
    ],
    'oCreateGatewayLimit' => [
        'type' => 2,
        'description' => 'Создание лимита для шлюза',
    ],
    'oCreateGatewayServiceSynonym' => [
        'type' => 2,
        'description' => 'Создание синонима услуги для шлюза',
    ],
    'oCreateInvoice' => [
        'type' => 2,
        'description' => 'Выставление счёта',
    ],
    'oCreateInvoiceSMS' => [
        'type' => 2,
        'description' => 'Право на создание операций, оплачиваемых посредством СМС',
    ],
    'oCreateKPSupportUser' => [
        'type' => 2,
        'description' => 'Создание пользователя СПП портала «Kcell»',
    ],
    'oCreateLimit' => [
        'type' => 2,
        'description' => 'Создание лимита',
    ],
    'oCreateMerchant' => [
        'type' => 2,
        'description' => 'Создание пользователя - мерчанта',
    ],
    'oCreateMerchantPoint' => [
        'type' => 2,
        'description' => 'Создать кассу QRPay',
    ],
    'oCreateModerator' => [
        'type' => 2,
        'description' => 'Создание пользователя - модератор системы',
    ],
    'oCreateNalogoviyInspector' => [
        'type' => 2,
        'description' => 'Создание пользователя - налогового инспектора',
    ],
    'oCreateOperationForPseudoUser' => [
        'type' => 2,
        'description' => 'Создание операций от имени пользователя',
    ],
    'oCreateOperationWithSpecialist' => [
        'type' => 2,
        'description' => 'Пользователь при создании операции может указать специалиста кого угодно',
    ],
    'oCreatePaymentsReport' => [
        'type' => 2,
        'description' => 'Создание отчета по платежам',
    ],
    'oCreatePrepaidCard' => [
        'type' => 2,
        'description' => 'Операция по созданию доверительного перевода',
    ],
    'oCreateResmiSupportUser' => [
        'type' => 2,
        'description' => 'Создание пользователя СПП Resmi',
    ],
    'oCreateSchoolkid' => [
        'type' => 2,
        'description' => 'Создание, регистрация школьника',
    ],
    'oCreateSubAgent' => [
        'type' => 2,
        'description' => 'Создание субагента',
    ],
    'oCreateSubMerchant' => [
        'type' => 2,
        'description' => ' Создание субмерчанта',
    ],
    'oCreateSubSubAgent' => [
        'type' => 2,
        'description' => 'Создание субсубагента',
    ],
    'oCronReports' => [
        'type' => 2,
        'description' => 'Автоматическая рассылка отчетов мерчантам',
    ],
    'oCustomAddService' => [
        'type' => 2,
        'description' => 'Создание кастомного сервиса',
    ],
    'oCustomDeleteService' => [
        'type' => 2,
        'description' => 'Удаление кастомного сервиса',
    ],
    'oCustomizeInvoice' => [
        'type' => 2,
        'description' => 'Кастомизация инвойса',
    ],
    'oCustomModifyService' => [
        'type' => 2,
        'description' => 'Редактирование кастомного сервиса',
    ],
    'oCustomServiceEdit' => [
        'type' => 2,
        'description' => 'Редактирование кастомных сервисов',
    ],
    'oDelayedHistory' => [
        'type' => 2,
        'description' => 'Получение истории с задержкой (из материализованного представления)',
    ],
    'oDelayedPayment' => [
        'type' => 2,
        'description' => 'Создание отложенных платежей',
    ],
    'oDelayedPaymentOrder' => [
        'type' => 2,
        'description' => 'Создание отложенного платежа в заказах',
    ],
    'oDeleteCity' => [
        'type' => 2,
        'description' => 'Удаление города',
    ],
    'oDeleteCommission' => [
        'type' => 2,
        'description' => 'Удаление комиссии',
    ],
    'oDeleteCountry' => [
        'type' => 2,
        'description' => 'Удаление страны',
    ],
    'oDeleteDiscount' => [
        'type' => 2,
        'description' => 'Удаление скидки',
    ],
    'oDeleteEvent' => [
        'type' => 2,
        'description' => 'Удаление акции',
    ],
    'oDeleteEventCashback' => [
        'type' => 2,
        'description' => 'Удалить cashback для акции',
    ],
    'oDeleteEventParticipants' => [
        'type' => 2,
        'description' => 'Удаление часть из акции',
    ],
    'oDeleteEventServices' => [
        'type' => 2,
        'description' => 'Удаление сервисов из акции',
    ],
    'oDeleteEventSubjectTypes' => [
        'type' => 2,
        'description' => 'Удаление из акции SubjectTypes',
    ],
    'oDeleteGatewayLimit' => [
        'type' => 2,
        'description' => 'Удаление лимита для шлюза',
    ],
    'oDeleteLimit' => [
        'type' => 2,
        'description' => 'Удаление лимита',
    ],
    'oDeleteService' => [
        'type' => 2,
        'description' => 'Удаление услуги',
    ],
    'oDeleteServiceGroup' => [
        'type' => 2,
        'description' => 'Удаление группы услуг',
    ],
    'oDeleteSubject' => [
        'type' => 2,
        'description' => 'Удаление субъектов',
    ],
    'oDeleteVisibleOperation' => [
        'type' => 2,
        'description' => 'Удаление операции, с отображением в отчётах',
    ],
    'oDivideOperation' => [
        'type' => 2,
        'description' => 'Разбиение операций превышающих лимит',
    ],
    'oDontShowNegativeBalance' => [
        'type' => 2,
        'description' => 'Не показывать отрицательный баланс',
    ],
    'oEditAgent' => [
        'type' => 2,
        'description' => 'Редактирование данных агента',
    ],
    'oEditBankTransferCancelReasons' => [
        'type' => 2,
        'description' => 'Редактирование списка причин отмены банковских переводов',
    ],
    'oEditBasket' => [
        'type' => 2,
        'description' => 'Редактирование корзины',
    ],
    'oEditDream' => [
        'type' => 2,
        'description' => 'Добавление, удаление и исполнения собственной мечты',
    ],
    'oEditEvent' => [
        'type' => 2,
        'description' => 'Редактирование события',
    ],
    'oEditFriend' => [
        'type' => 2,
        'description' => 'Редактирование списка друзей',
    ],
    'oEditInterests' => [
        'type' => 2,
        'description' => 'Редактирование интересов',
    ],
    'oEditLabels' => [
        'type' => 2,
        'description' => 'Редактирование меток',
    ],
    'oEditLandingForPromo' => [
        'type' => 2,
        'description' => 'Изменение посадочной страницы, где выбирают сервис, к которому привязать промо-код',
    ],
    'oEditLotTags' => [
        'type' => 2,
        'description' => 'Возможность привязки лота к определённым тэгам',
    ],
    'oEditMerchant' => [
        'type' => 2,
        'description' => 'Редактирование мерчанта',
    ],
    'oEditMerchantCabinet' => [
        'type' => 2,
        'description' => 'Редактирование кабинета мерчанта',
    ],
    'oEditMerchantProfile' => [
        'type' => 2,
        'description' => 'Редактирование профиля мерчанта (собственного или родительского)',
    ],
    'oEditProfile' => [
        'type' => 2,
        'description' => 'Редактирование профиля',
    ],
    'oEditRedirectRouteForPayment' => [
        'type' => 2,
        'description' => 'Изменение правил для перенаправления платежа',
    ],
    'oEditSecuritySettings' => [
        'type' => 2,
        'description' => 'Редактирование настроек безопасности',
    ],
    'oEditServicesListForPromo' => [
        'type' => 2,
        'description' => 'Изменение списка услуг, к которым можно применить промо-код',
    ],
    'oEditSynonym' => [
        'type' => 2,
        'description' => 'Редактирование синонимов',
    ],
    'oEditSystemUser' => [
        'type' => 2,
        'description' => 'Редактирование данных системного пользователя',
    ],
    'oEditTags' => [
        'type' => 2,
        'description' => 'Редактирование, создание тэгов',
    ],
    'oEmissionPayment' => [
        'type' => 2,
        'description' => 'Возможность выпуска денег и осуществления платежа',
    ],
    'oEmptyProfile' => [
        'type' => 2,
        'description' => 'Анкетные данные не введены',
    ],
    'oExecuteDream' => [
        'type' => 2,
        'description' => 'Исполнение мечты',
    ],
    'oGatewayServices' => [
        'type' => 2,
        'description' => 'Работа с сервисами шлюзов',
    ],
    'oGenerateMT100' => [
        'type' => 2,
        'description' => 'Генерация МТ100 для банков',
    ],
    'oGeneratePromoCodes' => [
        'type' => 2,
        'description' => 'Генерация промо-кодов',
    ],
    'oGetAccountsMerchant' => [
        'type' => 2,
        'description' => 'Получение списка счетов мерчанта',
    ],
    'oGetAccountSumToDate' => [
        'type' => 2,
        'description' => 'Получить счет до определенной даты',
    ],
    'oGetAllCardList' => [
        'type' => 2,
        'description' => 'Получение списка всех карт с Oracle',
    ],
    'oGetApprovedCards' => [
        'type' => 2,
        'description' => 'Получить список привязанных карт',
    ],
    'oGetAtmStatus' => [
        'type' => 2,
        'description' => 'Получение статуса вывода через банкоматы',
    ],
    'oGetBalanceInMerchantSystem' => [
        'type' => 2,
        'description' => 'Получение баланса из системы мерчанта',
    ],
    'oGetBrokerAccountList' => [
        'type' => 2,
        'description' => 'Получать список брокерских счетов',
    ],
    'oGetCardList' => [
        'type' => 2,
        'description' => 'Получение списка своих карт с Oracle',
    ],
    'oGetCardOperationInfo' => [
        'type' => 2,
        'description' => 'получение от эквайринга данных по операции ',
    ],
    'oGetCities' => [
        'type' => 2,
        'description' => 'Получение списка городов',
    ],
    'oGetCountries' => [
        'type' => 2,
        'description' => 'Получение списка стран',
    ],
    'oGetCountryCities' => [
        'type' => 2,
        'description' => 'Получение списка городов по стране',
    ],
    'oGetCurrencies' => [
        'type' => 2,
        'description' => 'Получение списка валют',
    ],
    'oGetDischargeAmount' => [
        'type' => 2,
        'description' => 'право на получение суммы гашений по счетам указанного юзера за указанный период',
    ],
    'oGetEventParticipants' => [
        'type' => 2,
        'description' => 'Получение части  из акции',
    ],
    'oGetEventServices' => [
        'type' => 2,
        'description' => 'Получение сервисов акции',
    ],
    'oGetEventSubjectTypes' => [
        'type' => 2,
        'description' => 'Получение из акции SubjectTypes',
    ],
    'oGetIpWhitelist' => [
        'type' => 2,
        'description' => 'Получить список белых IP пользователя',
    ],
    'oGetMerchantPoints' => [
        'type' => 2,
        'description' => 'Получить список касс QRPay',
    ],
    'oGetMobileOperator' => [
        'type' => 2,
        'description' => 'определение оператора сотовой связи по номеру телефона',
    ],
    'oGetOperationDataByExtId' => [
        'type' => 2,
        'description' => 'Получение данных по операции по extid',
    ],
    'oGetOwnStorningOperations' => [
        'type' => 2,
        'description' => 'Получить идентификаторы своих сторнирующих операций',
    ],
    'oGetParentInfo' => [
        'type' => 2,
        'description' => 'получить баланс и профильные данные родителя',
    ],
    'oGetReceiptByTransactionId' => [
        'type' => 2,
        'description' => 'Получить данные чека по идентификатору Oberthur MFS',
    ],
    'oGetRemainsToDate' => [
        'type' => 2,
        'description' => 'Получить остаток на счетах по указанному юзеру на указанную дату',
    ],
    'oGetReturnsCount' => [
        'type' => 2,
        'description' => 'получить количество операций возвратов для текущего субъекта',
    ],
    'oGetServiceGroups' => [
        'type' => 2,
        'description' => 'Получить группы услуг',
    ],
    'oGetServiceOperationsCount' => [
        'type' => 2,
        'description' => 'получение сводной информации по операциям, сгруппированной по сервисам',
    ],
    'oGetServices' => [
        'type' => 2,
        'description' => 'Получение списка услуг',
    ],
    'oGetServicesBySystem' => [
        'type' => 2,
        'description' => 'Получение списка услуг для одной из систем',
    ],
    'oGetServicesWithPayments' => [
        'type' => 2,
        'description' => 'Запрос сервисов на которые были платежи',
    ],
    'oGetStorningOperations' => [
        'type' => 2,
        'description' => 'Получить идентификаторы сторнирующих операций',
    ],
    'oGetSubjectParent' => [
        'type' => 2,
        'description' => 'Получить родителя субъекта',
    ],
    'oGetSubjectSiblings' => [
        'type' => 2,
        'description' => 'получить список <братьев> субъекта, включая его самого',
    ],
    'oGetSubjectType' => [
        'type' => 2,
        'description' => 'Получить тип субъекта по логину',
    ],
    'oGetSubjectTypes' => [
        'type' => 2,
        'description' => 'Получить все типы субъектов',
    ],
    'oGetSupportFilterData' => [
        'type' => 2,
        'description' => 'Получение дополнительных данных для фильтра в отчете фин специалиста Wooppay',
    ],
    'oGroupOperation' => [
        'type' => 2,
        'description' => 'Подтверждение и проведение заказов',
    ],
    'oGroupPayment' => [
        'type' => 2,
        'description' => 'Массовое проведение платежей для SmartSchool',
    ],
    'oGuestOperations' => [
        'type' => 2,
        'description' => 'Операции, доступные только гостю',
    ],
    'oIdentifyUser' => [
        'type' => 2,
        'description' => 'Идентифицировать неидентифицированного пользователя',
    ],
    'oInviteEvent' => [
        'type' => 2,
        'description' => 'Пригласить на событие',
    ],
    'oJoinEvent' => [
        'type' => 2,
        'description' => 'Присоединиться к событию',
    ],
    'oJuridicalSubjectPasswordChange' => [
        'type' => 2,
        'description' => 'Смена пароля юридического субъекта',
    ],
    'oJuridicalSubjectProfileEdit' => [
        'type' => 2,
        'description' => 'Право создавать/редактировать юридических субъектов',
    ],
    'oKcellBlockUser' => [
        'type' => 2,
        'description' => 'Блокировка сотрудника СПП портала «Kcell»',
    ],
    'oKCellOperation' => [
        'type' => 2,
        'description' => 'Создание операций с оплатой через Kcell',
    ],
    'oKcellPasswordReset' => [
        'type' => 2,
        'description' => 'Сброс пароля сотрудника СПП портала «Kcell»',
    ],
    'oKCellRefund' => [
        'type' => 2,
        'description' => 'возврат средств на KCELL',
    ],
    'oKcellSMSNotification' => [
        'type' => 2,
        'description' => 'Отправка СМС через шлюз Kcell',
    ],
    'oKcellUnblockUser' => [
        'type' => 2,
        'description' => 'Разблокировка сотрудника СПП портала «Kcell»',
    ],
    'oLandingPagesAdd' => [
        'type' => 2,
        'description' => 'Создание Посадочной страницы',
    ],
    'oLandingPagesDelete' => [
        'type' => 2,
        'description' => 'Удаление Посадочных страниц',
    ],
    'oLandingPagesEdit' => [
        'type' => 2,
        'description' => 'Изменение Посадочных страниц',
    ],
    'oLandingPagesInsertJS' => [
        'type' => 2,
        'description' => 'Вставка js в  контент посадочных страниц',
    ],
    'oLandingPagesList' => [
        'type' => 2,
        'description' => 'Список Посадочных страниц',
    ],
    'oLinkBankAccount' => [
        'type' => 2,
        'description' => 'Привязка субъекта к банковскому счету',
    ],
    'oLinkCard' => [
        'type' => 2,
        'description' => 'Привязка карты',
    ],
    'oLinkOperationToSpecialistAndMerchant' => [
        'type' => 2,
        'description' => 'Связать операцию с специалистом QRPay',
    ],
    'oLinkPromoCodeToSubject' => [
        'type' => 2,
        'description' => 'Привязка промо-кода к субъекту',
    ],
    'oLinkSpecialistToPoint' => [
        'type' => 2,
        'description' => 'Связать кассира с кассой QRPay',
    ],
    'oListCommission' => [
        'type' => 2,
        'description' => 'Просмотр списка комиссий',
    ],
    'oListJuridicalSubject' => [
        'type' => 2,
        'description' => 'Список юридических субъектов',
    ],
    'oLotEdit' => [
        'type' => 2,
        'description' => 'Редактирование лотов',
    ],
    'oLotsManager' => [
        'type' => 2,
        'description' => 'Менеджер лотов',
    ],
    'oLotsModerating' => [
        'type' => 2,
        'description' => 'Модерирование лотов (подтвердить или отправить обратно на редактирование лот)',
    ],
    'oLotsParse' => [
        'type' => 2,
        'description' => 'Запустить парсер YML, привязать категории товаров для парсера',
    ],
    'oLotsViewStatNotSend' => [
        'type' => 2,
        'description' => 'Не отправлять на статистику информацию о просмотрах товаров',
    ],
    'oManageRedirections' => [
        'type' => 2,
        'description' => 'Редактирование редиректов',
    ],
    'oMapMarkerEdit' => [
        'type' => 2,
        'description' => 'Создание/удаление точек на карте',
    ],
    'oMerchantKvitan' => [
        'type' => 2,
        'description' => 'Квитование операций гашения счетов мерчанта',
    ],
    'oMerchantReturn' => [
        'type' => 2,
        'description' => 'Возврат операции',
    ],
    'oMetaTagsEdit' => [
        'type' => 2,
        'description' => 'Редактирование мета тэгов',
    ],
    'oMobileRefund' => [
        'type' => 2,
        'description' => 'Возврат средств на Beeline (Oberthur) / KCell',
    ],
    'oMobileRefundAny' => [
        'type' => 2,
        'description' => 'Возврат средств на Beeline (Oberthur) / KCell по любой операции',
    ],
    'oModeratingComment' => [
        'type' => 2,
        'description' => 'Модерирование комментариев и отзывов к заведениям/лотам',
    ],
    'oModifyCity' => [
        'type' => 2,
        'description' => 'Редактирование города',
    ],
    'oModifyCommission' => [
        'type' => 2,
        'description' => 'Изменение комиссии',
    ],
    'oModifyCountry' => [
        'type' => 2,
        'description' => 'Редактирование страны',
    ],
    'oModifyDiscount' => [
        'type' => 2,
        'description' => 'Изменение скидки',
    ],
    'oModifyMerchantPoint' => [
        'type' => 2,
        'description' => 'Редактировать кассу QRPay',
    ],
    'oModifyService' => [
        'type' => 2,
        'description' => 'Редактирование услуги',
    ],
    'oModifyServiceGroup' => [
        'type' => 2,
        'description' => 'Изменение группы услуг',
    ],
    'oMoneyAgentRedemption' => [
        'type' => 2,
        'description' => 'Право создавать операции гашения по агентам',
    ],
    'oMoneyDischargeReportForAnyUser' => [
        'type' => 2,
        'description' => 'Просмотр отчета по гашениям по всем пользователям',
    ],
    'oMoneyEmissionReportForAnyUser' => [
        'type' => 2,
        'description' => 'Просмотр отчета по эмиссиям по всем пользователям',
    ],
    'oMoneyIssue' => [
        'type' => 2,
        'description' => 'Выпуск электронных денег',
    ],
    'oMoneyMerchantRedemption' => [
        'type' => 2,
        'description' => 'Погашение электронных денег со счетов мерчанта',
    ],
    'oMoneyOperationalIssue' => [
        'type' => 2,
        'description' => 'Выпуск для эмитента-операциониста',
    ],
    'oMoneyOperationalRedemption' => [
        'type' => 2,
        'description' => 'Погашение для эмитента-операциониста',
    ],
    'oMoneyOtherIssue' => [
        'type' => 2,
        'description' => 'Создание операции эмиссии с любого эмитента',
    ],
    'oMoneyPerformOtherIssue' => [
        'type' => 2,
        'description' => 'Возможность проводить чужие эмиссии',
    ],
    'oMoneySubAgentRedemption' => [
        'type' => 2,
        'description' => 'Право создавать операции гашения по субагентам',
    ],
    'oMoneySystemRedemption' => [
        'type' => 2,
        'description' => 'Создание погашение электронных денег с системного счёта',
    ],
    'oNominateUser' => [
        'type' => 2,
        'description' => 'Перевод неидентифицированного пользователя в именные',
    ],
    'oNotifyEmptyEmailAddress' => [
        'type' => 2,
        'description' => 'Уведомление о незаполненном email в профиле',
    ],
    'oNotifyInvoiceMerchant' => [
        'type' => 2,
        'description' => 'повторное уведомление мерчанта по инвойсу',
    ],
    'oOberthurNotification' => [
        'type' => 2,
        'description' => 'Уведомление по транзакциям oberthur',
    ],
    'oOberthurOperation' => [
        'type' => 2,
        'description' => 'Создание операций с оплатой Билайн',
    ],
    'oOberthurStatus' => [
        'type' => 2,
        'description' => 'Получение статуса по транзакциям oberthur',
    ],
    'oOlimpRefund' => [
        'type' => 2,
        'description' => 'Возврат средств на Olimp',
    ],
    'oOlimpRefundAny' => [
        'type' => 2,
        'description' => 'Возврат средств на Olimp по любой операции',
    ],
    'oOnlineConsultant' => [
        'type' => 2,
        'description' => 'Доступ к онлайн-консультанту',
    ],
    'oOperationAcquiring' => [
        'type' => 2,
        'description' => 'Подтверждение пополнений с запросами к поставщику',
    ],
    'oOperationLinkedCard' => [
        'type' => 2,
        'description' => 'Подтверждение пополнений с привязанной карты',
    ],
    'oOperationWithParentAccount' => [
        'type' => 2,
        'description' => 'Операция с родительским счетом',
    ],
    'oOtherPasswordReset' => [
        'type' => 2,
        'description' => 'Сброс пароля для любого пользователя',
    ],
    'oOverrideFromSubject' => [
        'type' => 2,
        'description' => 'Override From Subject',
    ],
    'oPasswordChangeReportForAnyUser' => [
        'type' => 2,
        'description' => 'Просмотр отчета по смене пароля по всем пользователям',
    ],
    'oPasswordReset' => [
        'type' => 2,
        'description' => 'Сброс пароля',
    ],
    'oPasswordResetAnyUser' => [
        'type' => 2,
        'description' => 'Отправка ссылки на email для сброса пароля любого пользователя',
    ],
    'oPayFromWallet' => [
        'type' => 2,
        'description' => 'Оплата с кошелька',
    ],
    'oPaymentOnParentAccount' => [
        'type' => 2,
        'description' => 'Операция платежа на родительский счет',
    ],
    'oPaymentReceive' => [
        'type' => 2,
        'description' => 'Получение платежа',
    ],
    'oPaymentSend' => [
        'type' => 2,
        'description' => 'Отправка платежа',
    ],
    'oPerformOperation' => [
        'type' => 2,
        'description' => 'Проведение операции',
    ],
    'oPerformPrepaidCard' => [
        'type' => 2,
        'description' => 'Операция по проведению доверительного перевода',
    ],
    'oPostExpressFullRegisterOperation' => [
        'type' => 2,
        'description' => 'просмотр полного реестра операций PostExpress',
    ],
    'oPostExpressOperatorBlock' => [
        'type' => 2,
        'description' => 'блокировка оператора  PostExpress',
    ],
    'oPostExpressOperatorChangePassword' => [
        'type' => 2,
        'description' => 'смена пароля оператору  PostExpress',
    ],
    'oPostExpressOperatorCreate' => [
        'type' => 2,
        'description' => 'создание оператора PostExpress',
    ],
    'oPostExpressOperatorList' => [
        'type' => 2,
        'description' => 'просмотр списка операторов PostExpress',
    ],
    'oPostExpressPointCreate' => [
        'type' => 2,
        'description' => 'создание точки PostExpress',
    ],
    'oPostExpressPointEdit' => [
        'type' => 2,
        'description' => 'изменение точки PostExpress',
    ],
    'oPostExpressPointList' => [
        'type' => 2,
        'description' => 'просмотр списка точек PostExpress',
    ],
    'oPostExpressPointRegisterOperation' => [
        'type' => 2,
        'description' => 'просмотр реестра операций PostExpress по точке',
    ],
    'oPostExpressProtectionCodeSend' => [
        'type' => 2,
        'description' => 'отправка кода протекции для получения денег за посылку PostExpress',
    ],
    'oPostExpressWorkWithParcel' => [
        'type' => 2,
        'description' => 'работа с посылками PostExpress',
    ],
    'oPseudoUserOperations' => [
        'type' => 2,
        'description' => 'Оплата без регистрации',
    ],
    'oRbacEdit' => [
        'type' => 2,
        'description' => 'Редактор RBAC',
    ],
    'oRegisterAddresslessTransferUser' => [
        'type' => 2,
        'description' => 'Регистрация получателя безадресного перевода',
    ],
    'oRegistering' => [
        'type' => 2,
        'description' => 'Регистрирование пользователей (подсчет кол-ва зарегистрированных пользователей)',
    ],
    'oRegisterPointOperator' => [
        'type' => 2,
        'description' => 'Регистрация касс QRPay',
    ],
    'oRegisterUser' => [
        'type' => 2,
        'description' => 'Регистрация пользователя',
    ],
    'oRemovePrefixFromLogin' => [
        'type' => 2,
        'description' => 'Удалять префикс из логина пользователя',
    ],
    'oReportACBReturn' => [
        'type' => 2,
        'description' => 'Отчет по возвратам (АКБ)',
    ],
    'oReportAccountManagerMerchants' => [
        'type' => 2,
        'description' => 'Отчет по мерчанту для аккаунт менеджера',
    ],
    'oReportAccountManagerPeriod' => [
        'type' => 2,
        'description' => 'Отчет по мерчантам за определенный период для аккаунт менеджера',
    ],
    'oReportAccounts' => [
        'type' => 2,
        'description' => 'Отчет по балансу пользователей',
    ],
    'oReportActED' => [
        'type' => 2,
        'description' => 'Акт сверки о зачислении электронных денег',
    ],
    'oReportAgentReverts' => [
        'type' => 2,
        'description' => 'реестр возвратов для агентов, субагентов',
    ],
    'oReportAgents' => [
        'type' => 2,
        'description' => 'Просмотр списка агентов',
    ],
    'oReportAllEmissionPayments' => [
        'type' => 2,
        'description' => 'Отчет по платежам с эмиссией по всем эмитентам',
    ],
    'oReportBirthday' => [
        'type' => 2,
        'description' => 'Просмотр отчёта по дням рождения',
    ],
    'oReportBlockedUsers' => [
        'type' => 2,
        'description' => 'Просмотр отчёта по заблокированным пользователям',
    ],
    'oReportBlocking' => [
        'type' => 2,
        'description' => 'Просмотр отчёта по блокировкам',
    ],
    'oReportByDecade' => [
        'type' => 2,
        'description' => 'Отчет системы по декадам',
    ],
    'oReportCommissions' => [
        'type' => 2,
        'description' => 'Просмотр списка коммиссий',
    ],
    'oReportConfirmedCommissions' => [
        'type' => 2,
        'description' => 'Просмотр списка подтвержденных коммиссий',
    ],
    'oReportDetailedOperations' => [
        'type' => 2,
        'description' => 'Отчёт по операциям с фильтрацией по периоду и сервису',
    ],
    'oReportDreamers' => [
        'type' => 2,
        'description' => 'Просмотр отчёта по мечтателям',
    ],
    'oReportEmissionPayment' => [
        'type' => 2,
        'description' => 'Отчет по платежам с эмиссией',
    ],
    'oReportEmitentRemainings' => [
        'type' => 2,
        'description' => 'Остаток на счетах денег определённого эмитента',
    ],
    'oReportEventCashback' => [
        'type' => 2,
        'description' => 'Получение списка кэшбека',
    ],
    'oReportEvents' => [
        'type' => 2,
        'description' => 'Получение списка акций',
    ],
    'oReportFailedLogins' => [
        'type' => 2,
        'description' => 'Просмотр отчёта о неудачных попытках входа',
    ],
    'oReportFinspec' => [
        'type' => 2,
        'description' => 'Просмотр отчета фин специалиста',
    ],
    'oReportForNationalBankForm10' => [
        'type' => 2,
        'description' => 'Отчёт для Национального банка. Форма 10',
    ],
    'oReportForNationalBankForm15' => [
        'type' => 2,
        'description' => 'Отчёт для Национального банка. Форма 15',
    ],
    'oReportForNationalBankForm7' => [
        'type' => 2,
        'description' => 'Отчёт для Национального банка. Форма 7',
    ],
    'oReportForNationalBankForm8' => [
        'type' => 2,
        'description' => 'Отчёт для Национального банка. Форма 8',
    ],
    'oReportForNationalBankForm9' => [
        'type' => 2,
        'description' => 'Отчёт для Национального банка. Форма 9',
    ],
    'oReportIdentifications' => [
        'type' => 2,
        'description' => 'Отчет по идентификациям',
    ],
    'oReportJuridicalSubjects' => [
        'type' => 2,
        'description' => 'Право просматривать список юридических субъектов',
    ],
    'oReportMarketerInfo' => [
        'type' => 2,
        'description' => 'Для просмотра отчётов по статистке платежей физлиц',
    ],
    'oReportMerchantFullRegisterOperation' => [
        'type' => 2,
        'description' => 'История платежей QRpay',
    ],
    'oReportMerchantPoints' => [
        'type' => 2,
        'description' => 'Получить список касс QRPay',
    ],
    'oReportMerchants' => [
        'type' => 2,
        'description' => 'Просмотр отчёта по мерчантам',
    ],
    'oReportMoneyIssue' => [
        'type' => 2,
        'description' => 'Отчет о выпуске электронных денег',
    ],
    'oReportMoneyMovement' => [
        'type' => 2,
        'description' => 'отчёт о движении ЭД',
    ],
    'oReportMoneyRedemption' => [
        'type' => 2,
        'description' => 'Отчет о погашении электронных денег',
    ],
    'oReportMT100' => [
        'type' => 2,
        'description' => 'Просмотр отчёта по форме МТ100',
    ],
    'oReportOperDay' => [
        'type' => 2,
        'description' => 'Просмотр отчёта за операционный день',
    ],
    'oReportPasswordReset' => [
        'type' => 2,
        'description' => 'Отчет по сбросу, смене паролей',
    ],
    'oReportReconciliation' => [
        'type' => 2,
        'description' => 'Получение акта сверки',
    ],
    'oReportRegistrations' => [
        'type' => 2,
        'description' => 'Отчет по новым аккаунтам',
    ],
    'oReportRegOperationByED' => [
        'type' => 2,
        'description' => 'Реестр операций ЭД по счёту',
    ],
    'oReportRemainingBalance' => [
        'type' => 2,
        'description' => 'Отчёт об остатках на счетах',
    ],
    'oReportReward' => [
        'type' => 2,
        'description' => 'Отчет по вознаграждениям',
    ],
    'oReportSchoolkidsRefills' => [
        'type' => 2,
        'description' => 'Получить отчет по пополнениям школьников',
    ],
    'oReportSessions' => [
        'type' => 2,
        'description' => 'Отчет по сессиям',
    ],
    'oReportSmartSchoolAccounts' => [
        'type' => 2,
        'description' => 'Отчет по балансу пользователей школьников',
    ],
    'oReportStatusChange' => [
        'type' => 2,
        'description' => 'Просмотр отчёта по смене статусов пользователя',
    ],
    'oReportSubagentClientReconciliation' => [
        'type' => 2,
        'description' => 'Доступ к запросу данных Субагента по Акту сверки о осуществлении Клиентами операций',
    ],
    'oReportSubagentConsolidated' => [
        'type' => 2,
        'description' => 'Итоговый отчёт о движении ЭД по кошельку субагента/агента',
    ],
    'oReportSubagentEMIncomeReconciliation' => [
        'type' => 2,
        'description' => 'Доступ к запросу данных Субагента по Акту сверки о зачислении электронных денег на кошельки Субагента',
    ],
    'oReportSubagentEMSaleReconciliation' => [
        'type' => 2,
        'description' => 'Доступ к запросу данных Субагента по Акту сверки о реализации ЭД',
    ],
    'oReportSubagentEMSaleToClientReconciliation' => [
        'type' => 2,
        'description' => 'Доступ к запросу данных Субагента по Реестру операций реализации ЭД Клиентам',
    ],
    'oReportTransfers' => [
        'type' => 2,
        'description' => 'Отчет по переводам',
    ],
    'oReportTypeChange' => [
        'type' => 2,
        'description' => 'Просмотр отчёта по смене типов пользователя',
    ],
    'oReportVipSubjects' => [
        'type' => 2,
        'description' => 'просмотр списка VIP субъектов',
    ],
    'oReportWithdrawal' => [
        'type' => 2,
        'description' => 'Отчет о выводах на электронную карту',
    ],
    'oResetPasswordRecoveryAttempts' => [
        'type' => 2,
        'description' => 'сброс попыток восстановления пароля',
    ],
    'oResmiBlockUser' => [
        'type' => 2,
        'description' => 'Блокировка сотрудника СПП «Resmi»',
    ],
    'oResmiPasswordReset' => [
        'type' => 2,
        'description' => 'Сброс пароля сотрудника СПП «Resmi»',
    ],
    'oResmiUnblockUser' => [
        'type' => 2,
        'description' => 'Разблокировка сотрудника СПП «Resmi»',
    ],
    'oResponseWrite' => [
        'type' => 2,
        'description' => 'Написание отзывов к товарам и услугам',
    ],
    'oReturnPartOfOperation' => [
        'type' => 2,
        'description' => 'Частичный возврат платежа',
    ],
    'oReturnPartOfOperationAnyUser' => [
        'type' => 2,
        'description' => 'Частичный возврат платежа любого пользователя',
    ],
    'oReverseBankTransfer' => [
        'type' => 2,
        'description' => 'Возврат денег по операции перевода на банковский счет',
    ],
    'oReverseOwnTransfer' => [
        'type' => 2,
        'description' => 'Сторнирование своего перевода (платежа)',
    ],
    'oReverseTransfer' => [
        'type' => 2,
        'description' => 'Сторнирование перевода (платежа)',
    ],
    'oSendConfirmationCode' => [
        'type' => 2,
        'description' => 'Отправка кода подтверждения операции',
    ],
    'oSendDirectMail' => [
        'type' => 2,
        'description' => 'Рассылка быстрым писем',
    ],
    'oSendPromoCodes' => [
        'type' => 2,
        'description' => 'Просмотр списка промо-кодов и отправка их пользователям',
    ],
    'oSendRequestToChangeGatewayCommission' => [
        'type' => 2,
        'description' => 'Отправить запрос на изменение комиссии для шлюза',
    ],
    'oSendSMSPaymentWithoutCode' => [
        'type' => 2,
        'description' => 'проведение операции Beeline без кода подтверждения',
    ],
    'oServiceEdit' => [
        'type' => 2,
        'description' => 'Редактирование услуг',
    ],
    'oServiceEditWaiting' => [
        'type' => 2,
        'description' => 'Редактирование услуги мерчантом',
    ],
    'oServicesBanner' => [
        'type' => 2,
        'description' => 'Изменить баннеры в сервисах',
    ],
    'oSetDischargementSchedule' => [
        'type' => 2,
        'description' => 'Право редактировать расписание гашений',
    ],
    'oSetIpWhitelist' => [
        'type' => 2,
        'description' => 'Задать список белых IP пользователя',
    ],
    'oSetIpWhitelistAny' => [
        'type' => 2,
        'description' => 'Задать список белых IP любого пользователя',
    ],
    'oSetIpWhitelistSelf' => [
        'type' => 2,
        'description' => 'Задать список белых IP своего пользователя',
    ],
    'oSetMT100Approved' => [
        'type' => 2,
        'description' => 'Право подтверждать адекватность банковских реквизитов субъекта',
    ],
    'oSetOperationAdditionalData' => [
        'type' => 2,
        'description' => 'oSetOperationAdditionalData',
    ],
    'oSetOperationWaiting' => [
        'type' => 2,
        'description' => 'Перевод операции на 19 статус',
    ],
    'oSetOtpSecret' => [
        'type' => 2,
        'description' => 'Задать OTP secret пользователя',
    ],
    'oSetOtpSecretAny' => [
        'type' => 2,
        'description' => 'Задать OTP secret любого пользователя',
    ],
    'oSetOtpSecretSelf' => [
        'type' => 2,
        'description' => 'Задать OTP secret своего пользователя',
    ],
    'oSetParentId' => [
        'type' => 2,
        'description' => 'Задать родителя операции',
    ],
    'oSetPlannedIndicators' => [
        'type' => 2,
        'description' => 'Внесение плановых финансовых показателей',
    ],
    'oSetSubjectParent' => [
        'type' => 2,
        'description' => 'Назначить родителя субъекта',
    ],
    'oShopCreate' => [
        'type' => 2,
        'description' => 'Создание магазина',
    ],
    'oShopEdit' => [
        'type' => 2,
        'description' => 'Создание, редактирование и все что связанно с магазином',
    ],
    'oShopsDelivery' => [
        'type' => 2,
        'description' => 'Создание, редактирование доставки для магазинов',
    ],
    'oSignDocument' => [
        'type' => 2,
        'description' => 'Подписание документов для ПШЭП',
    ],
    'oSimpleTransferSend' => [
        'type' => 2,
        'description' => 'Simple Transfer Send',
    ],
    'oSkipPendingOperations' => [
        'type' => 2,
        'description' => 'Не обновлять количество незавершенных операций',
    ],
    'oSmppOperation' => [
        'type' => 2,
        'description' => 'Проведение операции через SMPP',
    ],
    'oSmppPayment' => [
        'type' => 2,
        'description' => 'Создание платежа с оплатой СМС',
    ],
    'oStatisticsViewAttraction' => [
        'type' => 2,
        'description' => 'Просмотр отчётов в статистике по привлечению',
    ],
    'oStatisticsViewDeduction' => [
        'type' => 2,
        'description' => 'Просмотр отчётов в статистике по удержанию',
    ],
    'oStatisticsViewDevelopFlowers' => [
        'type' => 2,
        'description' => 'Просмотр отчётов в статистике по развитию (Доставка цветов)',
    ],
    'oStatisticsViewDevelopService' => [
        'type' => 2,
        'description' => 'Просмотр отчётов в статистике по развитию (Оплата услуг)',
    ],
    'oStatisticsViewDevelopShop' => [
        'type' => 2,
        'description' => 'Просмотр отчётов в статистике по развитию (для магазинов)',
    ],
    'oStealthForLogs' => [
        'type' => 2,
        'description' => 'Не логировать пользователя',
    ],
    'oSubAgentKvitan' => [
        'type' => 2,
        'description' => 'Право квитовать гашение субагентов',
    ],
    'oSystemKvitan' => [
        'type' => 2,
        'description' => 'Проведение погашение электронных денег с системного счёта',
    ],
    'oTextPagesAdd' => [
        'type' => 2,
        'description' => 'Добавление страниц',
    ],
    'oTextPagesDelete' => [
        'type' => 2,
        'description' => 'Удаление страниц',
    ],
    'oTextPagesEdit' => [
        'type' => 2,
        'description' => 'Редактирование страниц',
    ],
    'oTextPagesInsertJS' => [
        'type' => 2,
        'description' => 'Вставка js в контент текстовых страниц',
    ],
    'oTextPagesView' => [
        'type' => 2,
        'description' => 'Просмотр страниц',
    ],
    'oTransferDream' => [
        'type' => 2,
        'description' => 'Перевод на мечту',
    ],
    'oTransferEvent' => [
        'type' => 2,
        'description' => 'Перевод на событие',
    ],
    'oTransferOtherPerform' => [
        'type' => 2,
        'description' => 'Проведение чужих переводов',
    ],
    'oTransferOtherSend' => [
        'type' => 2,
        'description' => 'Создание перевода между субъектами',
    ],
    'oTransferReceive' => [
        'type' => 2,
        'description' => 'Получение перевода',
    ],
    'oTransferRequestList' => [
        'type' => 2,
        'description' => 'Список запросов на переводы',
    ],
    'oTransferRequestReceive' => [
        'type' => 2,
        'description' => 'Принять запрос на перевод',
    ],
    'oTransferRequestSend' => [
        'type' => 2,
        'description' => 'Послать запрос на перевод',
    ],
    'oTransferSend' => [
        'type' => 2,
        'description' => 'Отправка перевода',
    ],
    'oTransferSubagent' => [
        'type' => 2,
        'description' => 'Пополнение кошелька пользователя',
    ],
    'oUnblockIP' => [
        'type' => 2,
        'description' => 'Разблокировка IP',
    ],
    'oUnblockOperation' => [
        'type' => 2,
        'description' => 'Разблокировка денежной операции',
    ],
    'oUnblockUser' => [
        'type' => 2,
        'description' => 'Разблокировка пользователя',
    ],
    'oUnlimitedTransfer' => [
        'type' => 2,
        'description' => 'Беспредельный перевод',
    ],
    'oUnlinkSpecialistFromPoint' => [
        'type' => 2,
        'description' => 'Отвязать кассира от кассы QRPay',
    ],
    'oUpdateGatewayLimit' => [
        'type' => 2,
        'description' => 'Изменение лимита для шлюза',
    ],
    'oUpdateGatewayServices' => [
        'type' => 2,
        'description' => 'Редактирование услуг для шлюза',
    ],
    'oUseParentCommissions' => [
        'type' => 2,
        'description' => 'Расчет комиссий по родительскому субъекту',
    ],
    'oUseParentInvoice' => [
        'type' => 2,
        'description' => 'Создание инвойсов для родителя',
    ],
    'oUseParentServices' => [
        'type' => 2,
        'description' => 'Доступность сервисов по родительскому субъекту',
    ],
    'oUserSetLogin' => [
        'type' => 2,
        'description' => 'Привязка пользователя к логину',
    ],
    'oUssdView' => [
        'type' => 2,
        'description' => 'Операция на редактирование Ussd данных',
    ],
    'oViewAccountsAggregator' => [
        'type' => 2,
        'description' => 'Просмотр страницы агрегатора счетов',
    ],
    'oViewAgentCommissions' => [
        'type' => 2,
        'description' => 'Просмотр агентских комиссий',
    ],
    'oViewAllOperations' => [
        'type' => 2,
        'description' => 'Отчет по всем платежам',
    ],
    'oViewAllStatisticsReports' => [
        'type' => 2,
        'description' => 'Возможность просмотра всех отчётов в статистике',
    ],
    'oViewBankServicesConfig' => [
        'type' => 2,
        'description' => 'Просмотр настроек банковских сервисов',
    ],
    'oViewBasket' => [
        'type' => 2,
        'description' => 'Просмотр корзины',
    ],
    'oViewBillingHistory' => [
        'type' => 2,
        'description' => 'Получить историю запросов в биллинг по операции',
    ],
    'oViewCommissionAccount' => [
        'type' => 2,
        'description' => 'Просмотр счета комиссий',
    ],
    'oViewCompareList' => [
        'type' => 2,
        'description' => 'Возможность видеть список сравнения и пользоваться им',
    ],
    'oViewDataSpp' => [
        'type' => 2,
        'description' => 'Просмотр данных (о платежах, переводах и тд) необходимых для работы СПП',
    ],
    'oViewDreamers' => [
        'type' => 2,
        'description' => 'Просмотр мечтателей',
    ],
    'oViewErrorDetails' => [
        'type' => 2,
        'description' => 'Просмотр подробностей при ошибке',
    ],
    'oViewErrors' => [
        'type' => 2,
        'description' => 'Просмотр трэйса по ошибкам',
    ],
    'oViewEvent' => [
        'type' => 2,
        'description' => 'Просмотр события',
    ],
    'oViewEventList' => [
        'type' => 2,
        'description' => 'Просмотр списка событий',
    ],
    'oViewFavoriteList' => [
        'type' => 2,
        'description' => 'Просмотр списка избранного',
    ],
    'oViewFriendList' => [
        'type' => 2,
        'description' => 'Просмотр списка друзей',
    ],
    'oViewGatewayAdminMainPage' => [
        'type' => 2,
        'description' => 'Просмотр главной страницы администратора для шлюза',
    ],
    'oViewGatewayReport' => [
        'type' => 2,
        'description' => 'Просмотр отчета по платежам для шлюза',
    ],
    'oViewGatewayReportForSupportUser' => [
        'type' => 2,
        'description' => 'Просмотр отчета по платежам сотрудником СПП для шлюза',
    ],
    'oViewGatewayServices' => [
        'type' => 2,
        'description' => 'Просмотр доступных услуг для шлюза',
    ],
    'oViewLoansRepaymentOperations' => [
        'type' => 2,
        'description' => 'Просмотр операций погашения кредитов',
    ],
    'oViewMerchantProfile' => [
        'type' => 2,
        'description' => 'Просмотр профиля мерчанта',
    ],
    'oViewMessages' => [
        'type' => 2,
        'description' => 'Просмотр сообщений в ленте',
    ],
    'oViewModeratingServices' => [
        'type' => 2,
        'description' => 'Просмотр сервисов и услуг на модерации',
    ],
    'oViewParentOperations' => [
        'type' => 2,
        'description' => 'Просмотр операций родительского субъекта',
    ],
    'oViewParentsChildrenOperations' => [
        'type' => 2,
        'description' => 'Просмотр операций потомков своего родительского субъекта',
    ],
    'oViewProfile' => [
        'type' => 2,
        'description' => 'Просмотр профиля',
    ],
    'oViewRelatedOperations' => [
        'type' => 2,
        'description' => 'Просмотр операций-потомков в случае участия в родительской операции',
    ],
    'oViewServices' => [
        'type' => 2,
        'description' => 'Просмотр сервисов и услуг',
    ],
    'oViewServicesForAgent' => [
        'type' => 2,
        'description' => 'Просмотр сервисов и услуг для агента',
    ],
    'oViewStatisticsReports' => [
        'type' => 2,
        'description' => 'Просмотр отчётов в статистике',
    ],
    'oViewUserCount' => [
        'type' => 2,
        'description' => 'Просмотр количества пользователей',
    ],
    'oViewYaShare' => [
        'type' => 2,
        'description' => 'Возможность видеть кнопки расшаривания',
    ],
    'oVipSubjectListModify' => [
        'type' => 2,
        'description' => 'добавление/удаление VIP субъектов',
    ],
    'oWay4CancelCardAuthorization' => [
        'type' => 2,
        'description' => 'Отмена карточной авторизации',
    ],
    'oWay4Dischargement' => [
        'type' => 2,
        'description' => 'Погашение на карту',
    ],
    'oWay4Emission' => [
        'type' => 2,
        'description' => 'Выпуск с карты',
    ],
    'oWay4GetCardList' => [
        'type' => 2,
        'description' => 'Получение списка карт с Eubank',
    ],
    'oWay4GetHashByLogin' => [
        'type' => 2,
        'description' => 'Получение хэша пользователя по его логину для совершения операций по Евразийскому Банку',
    ],
    'oWay4LinkCard' => [
        'type' => 2,
        'description' => 'Привязка карты Way4',
    ],
    'oWay4RemoveCard' => [
        'type' => 2,
        'description' => 'Удаление привязанной карты',
    ],
    'oWithdrawalOther' => [
        'type' => 2,
        'description' => 'Запрос и проверка смс-кода при создании и подтверждении операции',
    ],
    'oWithdrawalToBankAccountDataWork' => [
        'type' => 2,
        'description' => 'Работа с данными по выводу на банковский счет',
    ],
    'oWooppayFinspecReport' => [
        'type' => 2,
        'description' => 'Отчет для фин. специалиста Wooppay',
    ],
    'oWorkWithAvailableServicesForSubject' => [
        'type' => 2,
        'description' => 'Доступные услуги для субъекта',
    ],
    'oWorkWithBWListCard' => [
        'type' => 2,
        'description' => 'Работа с белым и черным списком маск карт',
    ],
    'oWorkWithParentOperations' => [
        'type' => 2,
        'description' => 'отмена, подтверждение, возврат папиных операций',
    ],
    'oWorkWithRedemptionDetails' => [
        'type' => 2,
        'description' => 'Изменение данных банковского счета и МТ100 по погашению',
    ],
    'oWriteMessage' => [
        'type' => 2,
        'description' => 'Написать сообщение',
    ],
    'oWriteSystemMessage' => [
        'type' => 2,
        'description' => 'Писать сообщения от имени системы, которые будут видны всем пользователям',
    ],
    'oZWalletReturn' => [
        'type' => 2,
        'description' => 'Возврат с Z-кошельков (псевдопользователь) на кошелек без Z',
    ],
    'oZWalletReturnToAny' => [
        'type' => 2,
        'description' => 'Возврат с Z-кошельков (псевдопользователь) на любой кошелек',
    ],

    'tChangeOwnPassword' => [
        'type' => 2,
        'description' => 'Смена собственного пароля',
    ],
    'tViewLogs' => [
        'type' => 2,
        'description' => 'Просмотр логов',
    ],
    'oAccessSppCabinet' => [
        'type' => 2,
        'description' => 'Доступ к кабинету СПП',
    ],
    'oCreateCreditOperation' => [
        'type' => 2,
        'description' => 'Создание операций по кредиторской задолженности',
    ],
    'oCreatePartnerUser' => [
        'type' => 2,
        'description' => 'Создание пользователя - дочернего субъекта партнера',
    ],
    'oEmployeesManagement' => [
        'type' => 2,
        'description' => 'Просмотр, изменение и создание сотрудника для партнера',
    ],
    'oGetCreditAmount' => [
        'type' => 2,
        'description' => 'Получение остатков по кредиторским задолженностям',
    ],
    'oGoIntoMinus' => [
        'type' => 2,
        'description' => 'Возможность уходить в минус',
    ],
    'oIgnoreKcellLanguage' => [
        'type' => 2,
        'description' => 'Отправлять SMS Kcell всегда на русском',
    ],
    'oMerchantSiteManagement' => [
        'type' => 2,
        'description' => 'Просмотр и изменение адреса сайта мерчанта',
    ],
    'oOperationWithParentCredit' => [
        'type' => 2,
        'description' => 'Возможность пользоваться кредиторской задолженностью',
    ],
    'oReportCreditOperations' => [
        'type' => 2,
        'description' => 'Отчет по кредиторской задолженности',
    ],
    'oViewPartnerStatistic' => [
        'type' => 2,
        'description' => 'Просмотр статистики в кабинете агрегатора мерчантов',
    ],

    'oFaqManagement' => [
        'type' => 2,
        'description' => 'Управление FAQ ',
    ],
    'oReportAllCreditOperations' => [
        'type' => 2,
        'description' => 'Отчет по кредиторской задолженности всех субъектов',
    ],
    'oServiceBlacklistManage' => [
        'type' => 2,
        'description' => 'Возможность редактирования Black - листа на уровне ядра',
    ],
    'oServiceFieldManage' => [
        'type' => 2,
        'description' => 'Возможность редактирования филдов на уровне ядра ',
    ],
    'oServiceHistoryManage' => [
        'type' => 2,
        'description' => 'Возможность редактирования \\ просмотра истории сервисов на уровне ядра ',
    ],
    'oServiceJournalManage' => [
        'type' => 2,
        'description' => 'Возможность редактирования \\ просмотра журнала сервисов на уровне ядра ',
    ],

];
