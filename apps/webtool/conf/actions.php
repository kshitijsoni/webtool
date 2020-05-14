<?php

return [
    'fnbr' => ['mainPanel', 'main/main', 'fnbrIconForm', '', '', [
        'admin' => ['Admin', 'admin/main', 'fa fa-cogs fa16px', 'ADMIN', A_ACCESS, [
            'users' => ['Users', 'auth/user/main', 'fa fa-user fa16px', 'ADMIN', A_ACCESS, []],
            'annostatus' => ['Anno Status', 'admin/annostatus/main', 'fa fa-cog fa16px', 'ADMIN', A_ACCESS, []],
            'domain' => ['Domain', 'admin/domain/main', 'fa fa-cog fa16px', 'ADMIN', A_ACCESS, []],
            'relationgroup' => ['Relation Group', 'admin/relationgroup/main', 'fa fa-cog fa16px', 'ADMIN', A_ACCESS, []],
            'type' => ['Type', 'admin/type/main', 'fa fa-cog fa16px', 'ADMIN', A_ACCESS, []],
            'genre' => ['Genre', 'admin/genre/main', 'fa fa-cog fa16px', 'ADMIN', A_ACCESS, []],
        ]],
        'structure' => ['Structure', 'main/structure', 'fa fa-database fa16px', '', A_ACCESS, [
            'framestructure' => ['Frame', 'structure/frame/main', 'fa fa-list-alt fa16px', '', A_ACCESS, []],
            'corpusstructure' => ['Corpus', 'structure/corpus/main', 'fa fa-th-large fa16px', 'MASTER', A_ACCESS, []],
            'cxnstructure' => ['Construction', 'structure/cxn/main', 'fa fa-th fa16px', 'MASTER', A_ACCESS, []],
            'lemmas' => ['Lemmas', 'structure/lemma/main', 'fa fa-chess-board fa16px', 'MASTER', A_ACCESS, []],
            'qualia' => ['Qualia', 'structure/qualia/main', 'fab fa-connectdevelop fa16px', 'MASTER', A_ACCESS, []],
            'qualiarelation' => ['Qualia Relation', 'structure/qualiarelation/main', 'fas fa-arrows-alt-h fa16px', 'MASTER', A_ACCESS, []],
            'constrainttype' => ['Constraint Type', 'structure/constrainttype/main', 'fas fa-box-open fa16px', 'MASTER', A_ACCESS, []],
            'conceptstructure' => ['Concept', 'structure/concept/main', 'fa fa-life-ring fa16px', '', A_ACCESS, []],
            'templatestructure' => ['Template', 'structure/template/main', 'fa fa-files-o fa16px', 'MASTER', A_ACCESS, []],
            'semantictypestructure' => ['Semantic Type', 'structure/semantictype/main', 'fa fa-life-ring fa16px', 'MASTER', A_ACCESS, []],
            'relationgroupstructure' => ['Relation Group', 'structure/relationgroup/main', 'fa fa-sitemap fa16px', 'MASTER', A_ACCESS, []],
            'relationtypestructure' => ['Relation Type', 'structure/relationtype/main', 'fa fa-crosshairs fa16px', 'MASTER', A_ACCESS, []],
            'layergroupstructure' => ['Layer Group', 'structure/layergroup/main', 'fa fa-sitemap fa16px', 'MASTER', A_ACCESS, []],
            'layertypestructure' => ['Layer Type', 'structure/layertype/main', 'fa fa-crosshairs fa16px', 'MASTER', A_ACCESS, []],
            'genre' => ['Genre', 'structure/genre/main', 'fas fa-book fa16px', 'MASTER', A_ACCESS, []],
        ]],
        'annotation' => ['Annotation', 'annotation/main', 'fa fa-align-justify fa16px', '', A_ACCESS, [
            'lexicalAnnotation' => ['Frame Mode', 'annotation/main/formLexicalAnnotation', 'fa fa-file-text-o fa16px', '', A_ACCESS, []],
            //cnxAnnotation' => ['Construction Mode', 'annotation/main/formConstructionalAnnotation', 'fa fa-th fa16px', '', A_ACCESS, []],
            'corpusAnnotation' => ['Corpus Mode', 'annotation/main/formCorpusAnnotation', 'fa fa-file-text fa16px', '', A_ACCESS, []],
            //'mmAnnotation' => ['Multimodal Mode', 'annotation/main/formMultimodalAnnotation', 'fa fa-file-video fa16px', '', A_ACCESS, []],
            'layers' => ['Manage Layers', '^annotation/layer/formManager', 'fa fa-list fa16px', 'JUNIOR', A_ACCESS, []],
        ]],
        'reports' => ['Reports', 'main/reports', 'fa fa-newspaper-o fa16px', '', '', [
            'framereport' => ['Frames', 'report/frame/main', 'fa fa-list-alt fa16px', '', '', []],
            'cxnreport' => ['Constructions', 'report/cxn/main', 'fa fa-th fa16px', '', '', []],
            'corpusAnnotationReport' => ['Corpus Annotation', 'report/corpus/main', 'fa fa-file-text fa16px', '', A_ACCESS, []],
        ]],
        'grapher' => ['Grapher', 'main/grapher', 'fa fa-share-alt fa16px', '', '', [
            'fullgrapher' => ['Frames & CxN', 'grapher/grapher/main', 'fa fa-link fa16px', '', '', []],
            'domaingrapher' => ['Frames by Domain', 'grapher/domain/main', 'fa fa-link fa16px', '', '', []],
            'ccngrapher' => ['Constructicon', 'grapher/ccn/main', 'fa fa-link fa16px', '', '', []],
        ]],
        'editor' => ['Editor', 'main/visualeditor', 'fa fa-arrows fa16px', 'MASTER', A_ACCESS, [
            'frameeditor' => ['Frame Relation', 'visualeditor/frame/main', 'fa fa-list-alt fa16px', 'MASTER', A_ACCESS, []],
            'corenesseditor' => ['Coreness', 'visualeditor/frame/coreness', 'fa fa-th-list fa16px', 'MASTER', A_ACCESS, []],
            'cxneditor' => ['CxN Relation', 'visualeditor/cxn/main', 'fa fa-list-alt fa16px', 'MASTER', A_ACCESS, []],
            'cxnframeeditor' => ['CxN-Frame Relation', 'visualeditor/cxnframe/main', 'fa fa-list-alt fa16px', 'MASTER', A_ACCESS, []],
        ]],
        'utils' => ['Utils', 'main/utils/', 'fa fa-briefcase fa16px', 'MASTER', A_ACCESS, [
            'mailmsg' => ['Mail Message', 'auth/message/formMail', 'fa fa-envelope-o fa16px', '', A_ACCESS, []],
            'importWSDoc' => ['Import WS/Documen', 'utils/import/formImportWSDoc', 'fa fa-upload fa16px', 'ADMIN', A_ACCESS, []],
            'exportDocWf' => ['Export Doc-Wf', 'utils/export/formExportDocWf', 'fa fa-download fa16px', 'ADMIN', A_ACCESS, []],
            'importLexWf' => ['Import Wf-Lexeme', 'utils/import/formImportLexWf', 'fa fa-upload fa16px', 'MASTER', A_ACCESS, []],
            'wflex' => ['Search Wf-Lexeme', 'admin/wflex/main', 'fa fa-cog fa16px', '', A_ACCESS, []],
            'registerWfLex' => ['Register Wf-Lexeme', 'utils/register/formRegisterLexWf', 'fa fa-edit fa16px', 'MASTER', A_ACCESS, []],
            'importMWE' => ['Import MWE', 'utils/import/formImportMWE', 'fa fa-upload fa16px', 'MASTER', A_ACCESS, []],
            'importFullText' => ['Import FullText', 'utils/import/formImportFullText', 'fa fa-upload fa16px', 'MASTER', A_ACCESS, []],
            'importMultimodalText' => ['Import Multimodal Text', 'utils/import/formImportMultimodalText', 'fa fa-upload fa16px', 'MASTER', A_ACCESS, []],
            'importMultimodalVideo' => ['Import Multimodal Video', 'utils/import/formImportMultimodalVideo', 'fa fa-upload fa16px', 'MASTER', A_ACCESS, []],
            //'importXMLDoc' => ['Import XML Doc', 'utils/import/formImportXMLDoc', 'fa fa-upload fa16px', 'MASTER', A_ACCESS, []],
            //'exportFrames' => ['Export Frames', 'utils/export/formExportFrames', 'fa fa-download fa16px', 'ADMIN', A_ACCESS, []],
            //'importFrames' => ['Import Frames', 'utils/import/formImportFrames', 'fa fa-upload fa16px', 'ADMIN', A_ACCESS, []],
            //'exportCxnFS' => ['Export Cxn as FS', 'utils/export/formExportCxnFS', 'fa fa-download fa16px', 'ADMIN', A_ACCESS, []],
            //'exportCxnJson' => ['Export Cxn', 'utils/export/formExportCxn', 'fa fa-download fa16px', 'ADMIN', A_ACCESS, []],
            //'importCxnJson' => ['Import Cxn', 'utils/import/formImportCxn', 'fa fa-upload fa16px', 'ADMIN', A_ACCESS, []],
        ]],
        'language' => ['Language', 'main/language', 'fa fa-flag-checkered fa16px', '', A_ACCESS, [
            '--' => ['Entry', 'main/changeLanguage/--', 'fnbrFlag--', '', A_ACCESS, []],
            'sq' => ['Albanian', 'main/changeLanguage/sq', 'fnbrFlagSq', '', A_ACCESS, []],
            'ar' => ['Arabic', 'main/changeLanguage/ar', 'fnbrFlagAr', '', A_ACCESS, []],
            'zh' => ['Chinese', 'main/changeLanguage/zh', 'fnbrFlagZh', '', A_ACCESS, []],
            'en' => ['English', 'main/changeLanguage/en', 'fnbrFlagEn', '', A_ACCESS, []],
            'fi' => ['Finnish', 'main/changeLanguage/fi', 'fnbrFlagFi', '', A_ACCESS, []],
            'fr' => ['French', 'main/changeLanguage/fr', 'fnbrFlagFr', '', A_ACCESS, []],
            'de' => ['German', 'main/changeLanguage/de', 'fnbrFlagDe', '', A_ACCESS, []],
            'el' => ['Greek', 'main/changeLanguage/el', 'fnbrFlagEl', '', A_ACCESS, []],
            'hi' => ['Hindi', 'main/changeLanguage/hi', 'fnbrFlagHi', '', A_ACCESS, []],
            'iw' => ['Hebrew', 'main/changeLanguage/iw', 'fnbrFlagIw', '', A_ACCESS, []],
            'it' => ['Italian', 'main/changeLanguage/it', 'fnbrFlagIt', '', A_ACCESS, []],
            'jp' => ['Japanese', 'main/changeLanguage/jp', 'fnbrFlagJp', '', A_ACCESS, []],
            'kn' => ['Kanada', 'main/changeLanguage/kn', 'fnbrFlagKn', '', A_ACCESS, []],
            'ko' => ['Korean', 'main/changeLanguage/ko', 'fnbrFlagKo', '', A_ACCESS, []],
            'lt' => ['Lithuanian', 'main/changeLanguage/lt', 'fnbrFlagLt', '', A_ACCESS, []],
            'pt' => ['Portuguese', 'main/changeLanguage/pt', 'fnbrFlagPt', '', A_ACCESS, []],
            'es' => ['Spanish', 'main/changeLanguage/es', 'fnbrFlagEs', '', A_ACCESS, []],
            'se' => ['Swedish', 'main/changeLanguage/se', 'fnbrFlagSe', '', A_ACCESS, []],
            'ru' => ['Russian', 'main/changeLanguage/ru', 'fnbrFlagRu', '', A_ACCESS, []],
            'te' => ['Telugu', 'main/changeLanguage/te', 'fnbrFlagTe', '', A_ACCESS, []],
            'ur' => ['Urdu', 'main/changeLanguage/ur', 'fnbrFlagUr', '', A_ACCESS, []],
        ]],
        'profile' => ['Profile', 'main/profile', 'fa fa-info fa16px', '', A_ACCESS, [
            'myprofile' => ['My Profile', 'profile/formMyProfile', 'fa fa-credit-card fa16px', '', A_ACCESS, []],
            'logout' => ['Logout', 'main/logout', 'fa fa-sign-out fa16px', '', A_ACCESS, []],
        ]],
    ]]
];