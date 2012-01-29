<?php
/**
 * Validator to ensure the HTML content of an email doesn't contain unsupported elements.
 * @author Charles Pick
 * @package packages.email.components
 */
class AHtmlEmailValidator extends CHtmlPurifier {
	/**
	 * A list of options for html purifier
	 * @var array
	 */
	public $options = array(
		'HTML.Allowed' => '
			a[class|href|hreflang|id|name|rel|rev|target|shape|style|type|urn],
			abbr[class|dir|id|lang|style],
			acronym[class|dir|id|lang|style],
			address[class|dir|disabled|id|lang|style],
			area[class|coords|href|id|nohref|shape|style|target],
			b[class|dir|id|lang|style],
			base[class|href|id|target],
			basefont[class|color|face|id|size|style],
			big[class|dir|id|lang|style],
			blockquote[cite|class|dir|id|lang|style],
			body[alink|background|bgcolor|bgproperties|class|id|link|nowrap|text|vlink],
			br[class|clear|id|style],
			caption[align|class|id|lang|style|valign],
			center[class|dir|id|lang|style],
			cite[class|dir|id|lang|style],
			code[class|dir|id|lang|style],
			col[align|class|id|lang|span|style|valign|width],
			colgroup[align|bgcolor|class|dir|id|lang|span|style|valign|width],
			comment[class|data|dir|id|lang|style],
			dd[class|dir|id|lang|style],
			del[cite|class|datetime|dir|id|lang|style],
			dfn[class|dir|id|lang|style],
			dir[class|dir|id|lang|style|type],
			div[align|class|dir|id|lang|nowrap|style],
			dl[class|compact|dir|id|lang|style],
			dt[class|dir|id|lang|style|nowrap],
			em[class|dir|id|lang|style],
			fieldset[align|class|dir|id|lang|style],
			font[class|color|dir|face|id|lang|size|style],
			h1[align|class|dir|id|lang|style],
			h2[align|class|dir|id|lang|style],
			h3[align|class|dir|id|lang|style],
			h4[align|class|dir|id|lang|style],
			h5[align|class|dir|id|lang|style],
			h6[align|class|dir|id|lang|style],
			head[dir|lang],
			hr[align|class|color|dir|id|lang|size|style|width],
			html[dir|lang],
			i[class|dir|id|lang|style],
			img[align|alt|border|class|dir|dynsrc|height|hspace|id|ismap|lang|longdesc|lowsrc|name|src|style|usemap|vspace|width],
			ins[cite|class|datetime|dir|id|lang|style],
			kbd[class|dir|id|lang|style],
			label[class|dir|for|id|lang|style],
			legend[align|class|dir|id|lang|style],
			li[class|dir|id|lang|style|type|value],
			link[class|dir|href|hreflang|id|lang|name|rel|rev|style|type],
			listing[class|dir|id|lang|style],
			map[class|dir|id|lang|name|style],
			meta[content|http-equiv|id|name|scheme],
			nobr[class|dir|height|id|lang|style],
			ol[class|compact|dir|id|lang|style|type],
			p[align|class|dir|id|lang|style],
			pre[class|dir|id|lang|style],
			s[class|dir|id|lang|style],
			samp[class|dir|id|lang|style],
			small[class|dir|id|lang|style],
			span[class|dir|disabled|id|lang|style],
			strike[class|dir|id|lang|style],
			strong[class|dir|id|lang|style],
			style[dir|lang|type],
			sub[class|dir|id|lang|style],
			sup[class|dir|id|lang|style],
			table[align|bgcolor|border|bordercolor|cellpadding|cellspacing|class|cols|dir|frame|height|id|lang|rules|style|summary|width],
			tbody[align|bgcolor|ch|choff|class|cols|dir|id|lang|style|valign],
			td[abbr|align|axis|bgcolor|bordercolor|ch|choff|class|colspan|datafld|dir|headers|height|id|lang|nowrap|scope|style|width|valign],
			textarea[class|cols|dir|id|lang|name|readonly|rows|style|wrap],
			tfoot[bgcolor|ch|choff|class|cols|dir|id|lang|style|valign],
			th[abbr|axis|bgcolor|bordercolor|ch|choff|class|colspan|datafld|dir|headers|height|id|lang|nowrap|scope|style|width|valign],
			thead[bgcolor|ch|choff|class|cols|dir|id|lang|style|valign],
			tfoot[bgcolor|ch|choff|class|cols|dir|id|lang|style|valign],
			title[class|dir|id|lang|style],
			tr[align|bgcolor|bordercolor|class|dir|height|id|lang|style|width|valign],
			tt[class|dir|id|lang|style],
			u[class|dir|id|lang|style],
			ul[class|dir|id|lang|style|type],
			var[class|dir|id|lang|style],
			xml[class|id|src]
		',
		'CSS.ForbiddenProperties' => array(
			'azimuth',
			'background-attachment',
			'background-image',
			'background-position',
			'background-repeat',
			'border-spacing',
			'bottom',
			'caption-side',
			'clear',
			'clip',
			'content',
			'counter-increment',
			'counter-reset',
			'cue-before, cue-after, cue',
			'cursor',
			'display',
			'elevation',
			'empty-cells',
			'float',
			'font-size-adjust',
			'font-stretch',
			'left',
			'line-break',
			'list-style-image',
			'list-style-position',
			'marker-offset',
			'max-height',
			'max-width',
			'min-height',
			'min-width',
			'orphans',
			'outline',
			'outline-color',
			'outline-style',
			'outline-width',
			'overflow',
			'overflow-x',
			'overflow-y',
			'pause-before, pause-after, pause',
			'pitch',
			'pitch-range',
			'play-during',
			'position',
			'quotes',
			'richness',
			'right',
			'speak',
			'speak-header',
			'speak-numeral',
			'speak-punctuation',
			'speech-rate',
			'stress',
			'table-layout',
			'text-shadow',
			'text-transform',
			'top',
			'unicode-bidi',
			'visibility',
			'voice-family',
			'volume',
			'widows',
			'word-spacing',
			'z-index',
		)
	);
}