<?php

namespace FakerCommerce\Data;

use FakerCommerce\Faker\Helper;

class Name extends Data
{
    protected static array $clothes = [
        "a line skirt", "activewear", "ankle boot", "ankle grazer jean", "ankle sock", "anklet", "aviator jacket",
        "aviator sunglasses", "back in stock", "backless bra", "backpack", "bags purse", "ballet pump",
        "bandeau bikini", "bandeau top", "barely there sandal", "beach bag", "beach clothing", "beach cover up",
        "beanie", "beauty gadget", "belt", "biker boot", "biker jacket", "bikini", "bikini top", "black jean", "blazer",
        "blouse", "blush bronzer", "body care", "body jewellery", "bodysuit", "boiler suit", "bomber jacket",
        "books stationery", "boot", "boyfriend cardigan", "boyfriend jean", "bra", "bracelet", "branded",
        "bridal lingerie", "bridesmaid", "brief", "brogue", "bum bag", "cami", "cami", "cap", "cape", "cardigan",
        "cards gift wrap", "cargo trouser", "casual", "casual jumpsuit", "casual shirt", "charm", "check shirt",
        "chino", "choker", "christmas", "christmas jumper", "chunky cardigan", "chunky shoe", "chunky trainer",
        "cigarette trouser", "coat", "coats jacket", "cocktail", "coded promo", "coloured jean", "core promo",
        "corset top", "court shoe", "cowboy boot", "crop top", "cropped trouser", "cross body bag", "cta", "culotte",
        "curve plus size", "cut out swimsuit", "dark wash jean", "day", "decoration", "denim", "denim", "denim jacket",
        "denim jumpsuits", "denim shirt", "denim short", "denim skirt", "designer bag", "designer brand", "designer",
        "designer shoe", "designer swimwear", "duffle coat", "dungaree", "ear cuff", "earmuff", "earring",
        "espadrille", "evening", "evening top", "face body", "face body gift", "face covering", "fair isle jumper",
        "faux fur", "faux fur coat", "fedora", "festival", "festival", "festival face body", "festival jacket",
        "festival top", "flare", "flare jean", "flat sandal", "flat shoe", "fleece", "flip flop", "floral", "football",
        "formal", "foundation concealer", "fragrance", "fuller bust lingerie dd", "fuller bust swimwear dd",
        "further reduction", "generic promo", "gift", "gifts for her", "glove", "going out jumpsuit", "gym training",
        "hair care", "hairband", "halter neck", "halter neck top", "handbag", "hands feet", "hat", "heeled sandal",
        "heeled shoe", "high heel boot", "high leg bikini", "high top", "high waist skirt", "high waisted bikini",
        "high waisted jean", "high waisted short", "holdall", "homecoming", "hoodie", "hoodies sweatshirt", "jacket",
        "jackets coat", "jean", "jeans denim", "jersey top", "jewellery", "jewellery storage", "jogger", "jumper",
        "jumper", "jumpers cardigan", "jumpsuit", "kaftan", "keyring", "kimono", "knee high boot", "knee length",
        "knitted top", "knitwear", "lace", "lace lingerie", "lace top", "lashes mascara", "leather bag", "leather",
        "leather jacket", "leather leggings trouser", "leather short", "leather skirt", "legging", "legging short",
        "light wash jean", "lightweight jacket", "linen", "linen shirt", "linen short", "linen trouser", "lingerie",
        "lingerie nightwear", "lingerie set", "little black", "living", "loafer", "long sleeve top", "low rise jean",
        "makeup", "makeup bag", "maternity", "maxi", "maxi skirt", "micro bikini", "mid rise jean", "midi",
        "mini skirt", "mix match", "mom jean", "mule", "nail", "necklace", "new in", "new in clothing",
        "new in face body", "new in shoe", "new years eve", "nightwear", "nightwear lingerie",
        "novelty gift", "novelty sock", "nude shoe", "nursing", "nursing bra", "off shoulder top", "one shoulder",
        "outdoor", "outlet", "over the knee boot", "oversize bag", "parka", "party", "party shoe", "pea coat",
        "peg trouser", "pencil", "pencil skirt", "petite", "pinafore", "plain t shirt", "platform shoe",
        "pleated skirt", "plimsoll", "plus size", "plus size prom", "polka dot", "primers highlighter", "printed",
        "printed jean", "printed skirt", "printed t shirt", "printed top", "printed trouser", "purse", "pyjama",
        "quilted jacket", "race day", "ring", "ripped jean", "robe", "running", "sale", "sandal", "satchel", "satin",
        "scarves cape", "sequin", "sequin top", "sexy", "sexy lingerie", "shell top", "shift", "shirt", "shirt",
        "shirts blouse", "shoe", "shopper bag", "short", "shoulder bag", "skater", "skater skirt", "ski snowboard",
        "skin care", "skinny jean", "skinny trouser", "skirt", "skirts short", "sleeveless blazer", "slim jean",
        "slip skirt", "slipper", "smock", "sock", "sock boot", "socks tight", "sports bra", "sportswear",
        "straight leg jean", "straight leg trouser", "strapless", "stretch jean", "striped top", "suit jacket",
        "suit skirt", "suit trouser", "suits blazer", "suits separate", "summer", "summer short", "summer skirt",
        "suspender", "sweater vest", "sweatshirt", "swim", "swim set", "swimsuit", "swimwear beachwear", "swing",
        "t shirt", "tailored short", "tall", "tall petite maternity", "tank top", "tanning", "tea", "teddy coat",
        "thongs and brief", "tight", "top", "tote bag", "tracksuit", "trainer", "trainer sock", "travel bag",
        "travel gift", "trench coat", "triangle bikini", "triangle bra", "trousers legging", "tulle skirt", "tunic",
        "underwire swimsuits bikini", "valentines gifts for her", "valentines lingerie", "varsity jacket", "vest",
        "waterproof coat", "wedding", "wedding shoe", "wedge", "wellie", "white jean", "white jumpsuit", "white maxi",
        "wide leg jean", "wide leg trouser", "winter boot", "winter coat", "wool coat", "work shoe", "work trouser",
    ];

    public function name(): int|string
    {
        return Helper::randomize(self::$clothes);
    }
}