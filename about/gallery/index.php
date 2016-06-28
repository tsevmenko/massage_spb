<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Фотогалерея");
?><?$APPLICATION->IncludeComponent("bitrix:photogallery", ".default", array(
                                                            "USE_LIGHT_VIEW"             => "Y",
                                                            "IBLOCK_TYPE"                => "additional_info",
                                                            "IBLOCK_ID"                  => "11",
                                                            "UPLOAD_MAX_FILE_SIZE"       => "1024M",
                                                            "ALBUM_PHOTO_THUMBS_SIZE"    => "200",
                                                            "ALBUM_PHOTO_SIZE"           => "120",
                                                            "THUMBS_SIZE"                => "250",
                                                            "PREVIEW_SIZE"               => "700",
                                                            "ORIGINAL_SIZE"              => "0",
                                                            "PATH_TO_FONT"               => "",
                                                            "WATERMARK_RULES"            => "USER",
                                                            "SEF_MODE"                   => "Y",
                                                            "SEF_FOLDER"                 => "/about/gallery/",
                                                            "CACHE_TYPE"                 => "A",
                                                            "CACHE_TIME"                 => "3600",
                                                            "SET_TITLE"                  => "Y",
                                                            "USE_RATING"                 => "N",
                                                            "SHOW_TAGS"                  => "N",
                                                            "USE_COMMENTS"               => "N",
                                                            "SHOW_LINK_ON_MAIN_PAGE"     => array(
                                                                0 => "id",
                                                                1 => "shows",
                                                                2 => "rating",
                                                                3 => "comments",
                                                            ),
                                                            "USE_LIGHT_TEMPLATE"         => "N",
                                                            "WATERMARK"                  => "Y",
                                                            "WATERMARK_COLORS"           => array(
                                                                0 => "FF0000",
                                                                1 => "FFFF00",
                                                                2 => "FFFFFF",
                                                                3 => "000000",
                                                                4 => "",
                                                            ),
                                                            "ELEMENTS_USE_DESC_PAGE"     => "Y",
                                                            "SECTION_PAGE_ELEMENTS"      => "15",
                                                            "ELEMENTS_PAGE_ELEMENTS"     => "50",
                                                            "PAGE_NAVIGATION_TEMPLATE"   => "",
                                                            "SECTION_SORT_BY"            => "UF_DATE",
                                                            "SECTION_SORT_ORD"           => "DESC",
                                                            "ELEMENT_SORT_FIELD"         => "name",
                                                            "ELEMENT_SORT_ORDER"         => "desc",
                                                            "JPEG_QUALITY1"              => "95",
                                                            "JPEG_QUALITY2"              => "95",
                                                            "JPEG_QUALITY"               => "90",
                                                            "ADDITIONAL_SIGHTS"          => array(),
                                                            "WATERMARK_MIN_PICTURE_SIZE" => "200",
                                                            "DATE_TIME_FORMAT_SECTION"   => "d.m.Y",
                                                            "DATE_TIME_FORMAT_DETAIL"    => "d.m.Y",
                                                            "VARIABLE_ALIASES"           => array(
                                                                "SECTION_ID" => "SECTION_ID",
                                                                "ELEMENT_ID" => "ELEMENT_ID",
                                                                "PAGE_NAME"  => "PAGE_NAME",
                                                                "ACTION"     => "ACTION",
                                                            ),
                                                            "SEF_URL_TEMPLATES"          => array(
                                                                "index"             => "index.php",
                                                                "section"           => "#SECTION_ID#/",
                                                                "section_edit"      => "#SECTION_ID#/action/#ACTION#/",
                                                                "section_edit_icon" => "#SECTION_ID#/icon/action/#ACTION#/",
                                                                "upload"            => "#SECTION_ID#/action/upload/",
                                                                "detail"            => "#SECTION_ID#/#ELEMENT_ID#/",
                                                                "detail_edit"       => "#SECTION_ID#/#ELEMENT_ID#/action/#ACTION#/",
                                                                "detail_slide_show" => "#SECTION_ID#/#ELEMENT_ID#/slide_show/",
                                                                "detail_list"       => "list/",
                                                                "search"            => "search/",
                                                            )
                                                        ),
                                   false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>