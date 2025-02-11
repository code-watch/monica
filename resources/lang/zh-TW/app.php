<?php

/**
 * ⚠️ Editing not allowed except for 'en' language.
 *
 * @see https://github.com/monicahq/monica/blob/master/docs/contribute/translate.md for translations.
 */

return [
    'yes' => '是',
    'no' => '否',
    'update' => '更新',
    'save' => '儲存',
    'add' => '新增',
    'cancel' => '取消',
    'confirm' => '確認',
    'delete_confirm' => 'Are you sure?',
    'delete' => '刪除',
    'edit' => '編輯',
    'upload' => '上傳',
    'download' => '下載',
    'save_close' => '儲存並關閉',
    'close' => '關閉',
    'copy' => '複製',
    'create' => '建立',
    'remove' => '刪除',
    'revoke' => '撤銷',
    'done' => '完成',
    'back' => '返回',
    'verify' => '驗證',
    'new' => '新',
    'unknown' => '我不知道',
    'load_more' => '載入更多',
    'loading' => 'Loading…',
    'with' => '與',
    'today' => '今天',
    'yesterday' => '昨天',
    'another_day' => '某一天',
    'date' => '日期',
    'type' => '型別',
    'zoom' => '放大',
    'upgrade' => '升級解鎖',
    'percent_uploaded' => '已上傳 {percent}%',
    'retry' => '重試',
    'filter' => '過濾列表',
    'go_back' => '後退',
    'file_selected' => 'One file selected…|{count} files selected…',

    'application_title' => 'Monica – 您的私人社交關係管家',
    'application_description' => 'Monica是用來收集並管理您與親朋好友之間的關係的得力助手。',
    'application_og_title' => 'Have better relations with your loved ones. Free online CRM for friends and family.',

    'markdown_description' => '想用一種美觀的方式格式化文字嗎？我們以Markdown語法支援粗體、斜體、列表等樣式。',
    'markdown_link' => '閱讀文件',

    'header_settings_link' => '設定',
    'header_logout_link' => '登出',
    'header_changelog_link' => '更新日誌',

    'main_nav_cta' => '聯絡人',
    'main_nav_dashboard' => '儀表盤',
    'main_nav_family' => '聯絡人',
    'main_nav_journal' => '日記',
    'main_nav_activities' => '活動',
    'main_nav_tasks' => '任務',

    'footer_remarks' => 'Comments?',
    'footer_send_email' => 'Send us an email',
    'footer_privacy' => '隱私條款',
    'footer_release' => '版本說明',
    'footer_newsletter' => '新聞簡報',
    'footer_source_code' => '捐助',
    'footer_version' => '版本::version',
    'footer_new_version' => 'A new version of Monica is available',

    'footer_modal_version_whats_new' => '新增內容',
    'footer_modal_version_release_away' => '您有一個最新發布版本可更新。您應該更新例項. |您已經有:number個版本沒有更新，應該更新了。',

    'breadcrumb_dashboard' => '儀表盤',
    'breadcrumb_list_contacts' => '聯絡人',
    'breadcrumb_archived_contacts' => '存檔的聯絡人',
    'breadcrumb_journal' => '日記',
    'breadcrumb_settings' => '設定',
    'breadcrumb_settings_export' => '匯出',
    'breadcrumb_settings_users' => '使用者',
    'breadcrumb_settings_users_add' => '新增使用者',
    'breadcrumb_settings_subscriptions' => '訂閱',
    'breadcrumb_settings_import' => '匯入',
    'breadcrumb_settings_import_report' => '匯入報表',
    'breadcrumb_settings_import_upload' => '上傳',
    'breadcrumb_settings_tags' => '標籤',
    'breadcrumb_add_significant_other' => '新增其他重要',
    'breadcrumb_edit_significant_other' => '編輯其他重要',
    'breadcrumb_add_note' => '添加註釋',
    'breadcrumb_edit_note' => '編輯註釋',
    'breadcrumb_api' => 'API',
    'breadcrumb_dav' => 'DAV 資源',
    'breadcrumb_edit_introductions' => '你是怎麼知道的',
    'breadcrumb_settings_personalization' => '個性化',
    'breadcrumb_settings_security' => '安全',
    'breadcrumb_settings_security_2fa' => '二次驗證',
    'breadcrumb_profile' => ':name的資料',

    'gender_male' => '男',
    'gender_female' => '女',
    'gender_none' => '保密',
    'gender_no_gender' => '無性別',

    'error_title' => '糟糕! 出錯了。',
    'error_unauthorized' => '你沒有許可權編輯此頁',
    'error_user_account' => '此使用者不屬於此帳號',
    'error_save' => '當儲存資料時出現了一個錯誤',
    'error_try_again' => '出了點問題，請再試一次。',
    'error_id' => '錯誤程式碼：:id',
    'error_unavailable' => '服務不可用',
    'error_maintenance' => 'Maintenance in progress. We’ll be right back.',
    'error_help' => '待會見！',
    'error_twitter' => '關注我們的<a href="https://twitter.com/:twitter">推特</a>來得知網站的最新訊息！',
    'error_no_term' => '此例項尚無策略',

    'default_save_success' => '資料已被儲存',

    'compliance_title' => '抱歉，打擾您一下',
    'compliance_desc' => '我們更新了<a href=":urlterm" hreflang=":hreflang">使用者協議</a> 以及 <a href=":url" hreflang=":hreflang">隱私政策</a>，您需要閱讀並同意才能繼續使用您的帳號。',
    'compliance_desc_end' => '我們會保護您的隱私安全',
    'compliance_terms' => '我已閱讀並同意',

    // Relationship types
    // Yes, each relationship type has 8 strings associated with it.
    // This is because we need to indicate the name of the relationship type,
    // and also the name of the opposite side of this relationship (father/son),
    // and then, the feminine version of the string. Finally, in some sentences
    // in the UI, we need to include the name of the person we add the relationship
    // to.
    'relationship_type_group_love' => '戀愛關係',
    'relationship_type_group_family' => '家庭關係',
    'relationship_type_group_friend' => '朋友關係',
    'relationship_type_group_work' => '工作關係',
    'relationship_type_group_other' => '其他關係',

    'relationship_type_partner' => '搭檔',
    'relationship_type_partner_female' => '搭檔',
    'relationship_type_partner_with_name' => ':name的搭檔',
    'relationship_type_partner_female_with_name' => ':name的搭檔',

    'relationship_type_spouse' => '配偶',
    'relationship_type_spouse_female' => 'wife',
    'relationship_type_spouse_male' => 'husband',
    'relationship_type_spouse_with_name' => ':name的配偶',
    'relationship_type_spouse_female_with_name' => ':name’s wife',
    'relationship_type_spouse_male_with_name' => ':name’s husband',

    'relationship_type_date' => '約會物件',
    'relationship_type_date_female' => '約會物件',
    'relationship_type_date_with_name' => ':name的約會物件',
    'relationship_type_date_female_with_name' => ':name的約會物件',

    'relationship_type_lover' => '情人',
    'relationship_type_lover_female' => '情人',
    'relationship_type_lover_with_name' => ':name的情人',
    'relationship_type_lover_female_with_name' => ':name的情人',

    'relationship_type_inlovewith' => '喜歡的人',
    'relationship_type_inlovewith_female' => '喜歡的人',
    'relationship_type_inlovewith_with_name' => ':name喜歡的人',
    'relationship_type_inlovewith_female_with_name' => ':name喜歡的人',

    'relationship_type_lovedby' => '追求者',
    'relationship_type_lovedby_female' => '追求者',
    'relationship_type_lovedby_with_name' => ':name的追求者',
    'relationship_type_lovedby_female_with_name' => ':name的追求者',

    'relationship_type_ex' => 'ex-partner',
    'relationship_type_ex_female' => '前女友',
    'relationship_type_ex_male' => 'ex-boyfriend',
    'relationship_type_ex_with_name' => ':name’s ex-partner',
    'relationship_type_ex_female_with_name' => ':name的前女友',
    'relationship_type_ex_male_with_name' => ':name’s ex-boyfriend',

    'relationship_type_parent' => 'parent',
    'relationship_type_parent_female' => '母親',
    'relationship_type_parent_male' => 'father',
    'relationship_type_parent_with_name' => ':name’s parent',
    'relationship_type_parent_female_with_name' => ':name的母親',
    'relationship_type_parent_male_with_name' => ':name’s father',

    'relationship_type_child' => 'child',
    'relationship_type_child_female' => '女兒',
    'relationship_type_child_male' => 'son',
    'relationship_type_child_with_name' => ':name’s child',
    'relationship_type_child_female_with_name' => ':name的女人',
    'relationship_type_child_male_with_name' => ':name’s son',

    'relationship_type_stepparent' => 'step-parent',
    'relationship_type_stepparent_female' => '繼母',
    'relationship_type_stepparent_male' => 'stepfather',
    'relationship_type_stepparent_with_name' => ':name’s step-parent',
    'relationship_type_stepparent_female_with_name' => ':name的繼母',
    'relationship_type_stepparent_male_with_name' => ':name’s stepfather',

    'relationship_type_stepchild' => 'stepchild',
    'relationship_type_stepchild_female' => '繼女',
    'relationship_type_stepchild_male' => 'stepson',
    'relationship_type_stepchild_with_name' => ':name’s stepchild',
    'relationship_type_stepchild_female_with_name' => ':name的繼女',
    'relationship_type_stepchild_male_with_name' => ':name’s stepson',

    'relationship_type_sibling' => 'sibling',
    'relationship_type_sibling_female' => '姐妹',
    'relationship_type_sibling_male' => 'brother',
    'relationship_type_sibling_with_name' => ':name’s sibling',
    'relationship_type_sibling_female_with_name' => ':name的姐妹',
    'relationship_type_sibling_male_with_name' => ':name’s brother',

    'relationship_type_grandparent' => 'grandparent',
    'relationship_type_grandparent_female' => 'grandmother',
    'relationship_type_grandparent_male' => 'grandfather',
    'relationship_type_grandparent_with_name' => ':name’s grandparent',
    'relationship_type_grandparent_female_with_name' => ':name’s grandmother',
    'relationship_type_grandparent_male_with_name' => ':name’s grandfather',

    'relationship_type_grandchild' => 'grandchild',
    'relationship_type_grandchild_female' => 'granddaughter',
    'relationship_type_grandchild_male' => 'grandson',
    'relationship_type_grandchild_with_name' => ':name’s grandchild',
    'relationship_type_grandchild_female_with_name' => ':name’s granddauther',
    'relationship_type_grandchild_male_with_name' => ':name’s grandson',

    'relationship_type_uncle' => '叔叔',
    'relationship_type_uncle_female' => '阿姨',
    'relationship_type_uncle_with_name' => ':name的叔叔',
    'relationship_type_uncle_female_with_name' => ':name的阿姨',

    'relationship_type_nephew' => '外甥',
    'relationship_type_nephew_female' => '外甥女',
    'relationship_type_nephew_with_name' => ':name的外甥',
    'relationship_type_nephew_female_with_name' => ':name的外甥女',

    'relationship_type_cousin' => '堂兄弟',
    'relationship_type_cousin_female' => '堂姐妹',
    'relationship_type_cousin_with_name' => ':name的堂兄弟',
    'relationship_type_cousin_female_with_name' => ':name的堂姐妹',

    'relationship_type_godfather' => 'godparent',
    'relationship_type_godfather_female' => '神母',
    'relationship_type_godfather_male' => 'godfather',
    'relationship_type_godfather_with_name' => ':name’s godparent',
    'relationship_type_godfather_female_with_name' => ':name的神母',
    'relationship_type_godfather_male_with_name' => ':name’s godfather',

    'relationship_type_godson' => 'godchild',
    'relationship_type_godson_female' => '義女',
    'relationship_type_godson_male' => 'godson',
    'relationship_type_godson_with_name' => ':name’s godchild',
    'relationship_type_godson_female_with_name' => ':name的義女',
    'relationship_type_godson_male_with_name' => ':name’s godson',

    'relationship_type_friend' => '朋友',
    'relationship_type_friend_female' => '朋友',
    'relationship_type_friend_with_name' => ':name的朋友',
    'relationship_type_friend_female_with_name' => ':name的朋友',

    'relationship_type_bestfriend' => '基友',
    'relationship_type_bestfriend_female' => '閨密',
    'relationship_type_bestfriend_with_name' => ':name的基友',
    'relationship_type_bestfriend_female_with_name' => ':name的閨密',

    'relationship_type_colleague' => '同事',
    'relationship_type_colleague_female' => '同事',
    'relationship_type_colleague_with_name' => ':name的同事',
    'relationship_type_colleague_female_with_name' => ':name的同事',

    'relationship_type_boss' => '上司',
    'relationship_type_boss_female' => '上司',
    'relationship_type_boss_with_name' => ':name的上司',
    'relationship_type_boss_female_with_name' => ':name的上司',

    'relationship_type_subordinate' => '下屬',
    'relationship_type_subordinate_female' => '下屬',
    'relationship_type_subordinate_with_name' => ':name的下屬',
    'relationship_type_subordinate_female_with_name' => ':name的下屬',

    'relationship_type_mentor' => '老師',
    'relationship_type_mentor_female' => '老師',
    'relationship_type_mentor_with_name' => ':name的老師',
    'relationship_type_mentor_female_with_name' => ':name的老師',

    'relationship_type_protege' => 'protégé',
    'relationship_type_protege_female' => 'protégé',
    'relationship_type_protege_with_name' => ':name’s protégé',
    'relationship_type_protege_female_with_name' => ':name’s protégé',

    'relationship_type_ex_husband' => 'ex-spouse',
    'relationship_type_ex_husband_female' => '前妻',
    'relationship_type_ex_husband_male' => 'ex-husband',
    'relationship_type_ex_husband_with_name' => ':name’s ex-spouse',
    'relationship_type_ex_husband_female_with_name' => ':name的前妻',
    'relationship_type_ex_husband_male_with_name' => ':name’s ex-husband',

    // emotions
    'emotion_primary_love' => '喜愛',
    'emotion_primary_joy' => '開心',
    'emotion_primary_surprise' => '驚訝',
    'emotion_primary_anger' => '生氣',
    'emotion_primary_sadness' => '悲傷',
    'emotion_primary_fear' => '恐懼',

    'emotion_secondary_affection' => '感情',
    'emotion_secondary_lust' => '慾望',
    'emotion_secondary_longing' => '渴望',
    'emotion_secondary_cheerfulness' => '興高采烈',
    'emotion_secondary_zest' => '熱情',
    'emotion_secondary_contentment' => '滿足',
    'emotion_secondary_pride' => '驕傲',
    'emotion_secondary_optimism' => '樂觀',
    'emotion_secondary_enthrallment' => '沉迷',
    'emotion_secondary_relief' => '如釋重負',
    'emotion_secondary_surprise' => '驚訝',
    'emotion_secondary_irritation' => '刺激',
    'emotion_secondary_exasperation' => '惱怒',
    'emotion_secondary_rage' => '狂怒',
    'emotion_secondary_disgust' => '厭惡',
    'emotion_secondary_envy' => '嫉妒',
    'emotion_secondary_suffering' => '痛苦',
    'emotion_secondary_sadness' => '悲傷',
    'emotion_secondary_disappointment' => '失望',
    'emotion_secondary_shame' => '恥辱',
    'emotion_secondary_neglect' => '忽視',
    'emotion_secondary_sympathy' => '同情',
    'emotion_secondary_horror' => '恐怖',
    'emotion_secondary_nervousness' => '緊張',

    'emotion_adoration' => '崇拜',
    'emotion_affection' => '感情',
    'emotion_love' => '喜愛',
    'emotion_fondness' => '寵愛',
    'emotion_liking' => '喜歡',
    'emotion_attraction' => '吸引',
    'emotion_caring' => '關心',
    'emotion_tenderness' => '柔情',
    'emotion_compassion' => '同情',
    'emotion_sentimentality' => '多愁善感',
    'emotion_arousal' => '激勵',
    'emotion_desire' => '期望',
    'emotion_lust' => '慾望',
    'emotion_passion' => '熱情',
    'emotion_infatuation' => '迷戀',
    'emotion_longing' => '渴望',
    'emotion_amusement' => '娛樂',
    'emotion_bliss' => '欣喜若狂',
    'emotion_cheerfulness' => '興高采烈',
    'emotion_gaiety' => '歡樂',
    'emotion_glee' => '高興',
    'emotion_jolliness' => '喬利',
    'emotion_joviality' => '快樂',
    'emotion_joy' => '開心',
    'emotion_delight' => '喜悅',
    'emotion_enjoyment' => '享受',
    'emotion_gladness' => '喜悅',
    'emotion_happiness' => '快樂',
    'emotion_jubilation' => '喜慶',
    'emotion_elation' => '興高采烈',
    'emotion_satisfaction' => '稱心如意',
    'emotion_ecstasy' => '狂喜',
    'emotion_euphoria' => '過度興奮',
    'emotion_enthusiasm' => '熱情高漲',
    'emotion_zeal' => '狂熱',
    'emotion_zest' => '熱情',
    'emotion_excitement' => '興奮',
    'emotion_thrill' => '快感',
    'emotion_exhilaration' => '不亦樂乎',
    'emotion_contentment' => '滿足',
    'emotion_pleasure' => '快樂',
    'emotion_pride' => '驕傲',
    'emotion_eagerness' => '渴望',
    'emotion_hope' => '希望',
    'emotion_optimism' => '樂觀',
    'emotion_enthrallment' => '沉迷',
    'emotion_rapture' => '狂喜',
    'emotion_relief' => '如釋重負',
    'emotion_amazement' => '驚奇',
    'emotion_surprise' => '驚訝',
    'emotion_astonishment' => '驚訝',
    'emotion_aggravation' => '惡化',
    'emotion_irritation' => '刺激',
    'emotion_agitation' => '鼓動',
    'emotion_annoyance' => '煩惱',
    'emotion_grouchiness' => '發牢騷',
    'emotion_grumpiness' => '脾氣暴躁',
    'emotion_exasperation' => '惱怒',
    'emotion_frustration' => '受挫',
    'emotion_anger' => '生氣',
    'emotion_rage' => '狂怒',
    'emotion_outrage' => '憤怒',
    'emotion_fury' => '憤怒',
    'emotion_wrath' => '暴怒',
    'emotion_hostility' => '敵意',
    'emotion_ferocity' => '凶猛',
    'emotion_bitterness' => '辛酸',
    'emotion_hate' => '討厭',
    'emotion_loathing' => '嫌惡',
    'emotion_scorn' => '蔑視',
    'emotion_spite' => '怨恨',
    'emotion_vengefulness' => '報復',
    'emotion_dislike' => '不喜歡',
    'emotion_resentment' => '怨恨',
    'emotion_disgust' => '厭惡',
    'emotion_revulsion' => '反感',
    'emotion_contempt' => '輕蔑',
    'emotion_envy' => '嫉妒',
    'emotion_jealousy' => '嫉妒',
    'emotion_agony' => '痛苦',
    'emotion_suffering' => '痛苦',
    'emotion_hurt' => '傷心',
    'emotion_anguish' => '生不如死',
    'emotion_depression' => '憂鬱',
    'emotion_despair' => '絕望',
    'emotion_hopelessness' => '無可救藥',
    'emotion_gloom' => '沮喪',
    'emotion_glumness' => '陰沉',
    'emotion_sadness' => '悲傷',
    'emotion_unhappiness' => '不幸',
    'emotion_grief' => '悲痛',
    'emotion_sorrow' => '悲患',
    'emotion_woe' => '榮辱與共',
    'emotion_misery' => '痛苦',
    'emotion_melancholy' => '悲傷',
    'emotion_dismay' => '沮喪',
    'emotion_disappointment' => '失望',
    'emotion_displeasure' => '不滿',
    'emotion_guilt' => '內疚',
    'emotion_shame' => '恥辱',
    'emotion_regret' => '後悔',
    'emotion_remorse' => '悔恨',
    'emotion_alienation' => '異化',
    'emotion_isolation' => '分離',
    'emotion_neglect' => '忽視',
    'emotion_loneliness' => '孤獨',
    'emotion_rejection' => '拒絕',
    'emotion_homesickness' => '鄉愁',
    'emotion_defeat' => '失敗',
    'emotion_dejection' => '沮喪',
    'emotion_insecurity' => '緊張',
    'emotion_embarrassment' => '尷尬',
    'emotion_humiliation' => '屈辱',
    'emotion_insult' => '侮辱',
    'emotion_pity' => '可惜',
    'emotion_sympathy' => '同情',
    'emotion_alarm' => '警覺',
    'emotion_shock' => '震撼',
    'emotion_fear' => '恐懼',
    'emotion_fright' => '驚嚇',
    'emotion_horror' => '恐怖',
    'emotion_terror' => '恐怖',
    'emotion_panic' => '恐慌',
    'emotion_hysteria' => '歇斯底里',
    'emotion_mortification' => '屈辱',
    'emotion_anxiety' => '焦慮',
    'emotion_nervousness' => '緊張',
    'emotion_tenseness' => '神經緊繃',
    'emotion_uneasiness' => '不安',
    'emotion_apprehension' => '憂慮',
    'emotion_worry' => '擔心',
    'emotion_distress' => '苦惱',
    'emotion_dread' => '驚恐',

    // weather
    'weather_sunny' => 'Sunny',
    'weather_clear' => 'Clear',
    'weather_clear-day' => 'Clear',
    'weather_clear-night' => '晴朗的夜晚',
    'weather_light-drizzle' => 'Light drizzle',
    'weather_patchy-light-drizzle' => 'Patchy light drizzle',
    'weather_patchy-light-rain' => 'Patchy light rain',
    'weather_light-rain' => 'Light rain',
    'weather_moderate-rain-at-times' => 'Moderate rain at times',
    'weather_moderate-rain' => 'Moderate rain',
    'weather_patchy-rain-possible' => 'Patchy rain possible',
    'weather_heavy-rain-at-times' => 'Heavy rain at times',
    'weather_heavy-rain' => 'Heavy rain',
    'weather_light-freezing-rain' => 'Light freezing rain',
    'weather_moderate-or-heavy-freezing-rain' => 'Moderate or heavy freezing rain',
    'weather_light-sleet' => 'Light sleet',
    'weather_moderate-or-heavy-rain-shower' => 'Moderate or heavy rain shower',
    'weather_light-rain-shower' => 'Light rain shower',
    'weather_torrential-rain-shower' => 'Torrential rain shower',
    'weather_rain' => '雨',
    'weather_snow' => '雪',
    'weather_blowing-snow' => 'Blowing snow',
    'weather_patchy-light-snow' => 'Patchy light snow',
    'weather_light-snow' => 'Light snow',
    'weather_patchy-moderate-snow' => 'Patchy moderate snow',
    'weather_moderate-snow' => 'Moderate snow',
    'weather_patchy-heavy-snow' => 'Patchy heavy snow',
    'weather_heavy-snow' => 'Heavy snow',
    'weather_light-snow-showers' => 'Light snow showers',
    'weather_moderate-or-heavy-snow-showers' => 'Moderate or heavy snow showers',
    'weather_patchy-snow-possible' => 'Patchy snow possible',
    'weather_patchy-sleet-possible' => 'Patchy sleet possible',
    'weather_moderate-or-heavy-sleet' => 'Moderate or heavy sleet',
    'weather_light-sleet-showers' => 'Light sleet showers',
    'weather_moderate-or-heavy-sleet-showers' => 'Moderate or heavy sleet showers',
    'weather_sleet' => '雨夾雪',
    'weather_wind' => '風',
    'weather_fog' => '霧',
    'weather_freezing-fog' => 'Freezing fog',
    'weather_mist' => 'Mist',
    'weather_blizzard' => 'Blizzard',
    'weather_overcast' => 'Overcast',
    'weather_cloudy' => '多雲',
    'weather_partly-cloudy-day' => 'Partly cloudy',
    'weather_partly-cloudy-night' => 'Partly cloudy',
    'weather_freezing-drizzle' => 'Freezing drizzle',
    'weather_heavy-freezing-drizzle' => 'Heavy freezing drizzle',
    'weather_patchy-freezing-drizzle-possible' => 'Patchy freezing drizzle possible',
    'weather_ice-pellets' => 'Ice pellets',
    'weather_light-showers-of-ice-pellets' => 'Light showers of ice pellets',
    'weather_moderate-or-heavy-showers-of-ice-pellets' => 'Moderate or heavy showers of ice pellets',
    'weather_thundery-outbreaks-possible' => 'Thundery outbreaks possible',
    'weather_patchy-light-rain-with-thunder' => 'Patchy light rain with thunder',
    'weather_moderate-or-heavy-rain-with-thunder' => 'Moderate or heavy rain with thunder',
    'weather_patchy-light-snow-with-thunder' => 'Patchy light snow with thunder',
    'weather_moderate-or-heavy-snow-with-thunder' => 'Moderate or heavy snow with thunder',
    'weather_current_temperature_celsius' => ':temperature °C',
    'weather_current_temperature_fahrenheit' => ':temperature °F',
    'weather_current_title' => '當前天氣',

    // dav
    'dav_contacts' => '名片',
    'dav_contacts_description' => ':name的名片',
    'dav_birthdays' => '生日',
    'dav_birthdays_description' => ':name的名片生日',
    'dav_tasks' => '任務',
    'dav_tasks_description' => ':name的任務',

    // contact list
    'contact_list_avatar' => 'Avatar',
    'contact_list_name' => 'Contact',
    'contact_list_description' => 'Description',

];
