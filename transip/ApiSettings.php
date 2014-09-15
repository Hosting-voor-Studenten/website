<?php

/**
 * This class holds the settings for the TransIP API.
 */
class Transip_ApiSettings
{
	/**
	 * The mode in which the API operates, can be either:
	 *		readonly
	 *		readwrite
	 *
	 * In readonly mode, no modifying functions can be called.
	 * To make persistent changes, readwrite mode should be enabled.
	 */
	public static $mode = 'readonly';

	 /**
	 * TransIP API endpoint to connect to.
	 *
	 * e.g.:
	 *
	 * 		'api.transip.nl'
	 * 		'api.transip.be'
	 * 		'api.transip.eu'
	 */
	public static $endpoint = 'api.transip.nl';

	/**
	 * Your login name on the TransIP website.
	 *
	 */
	public static $login = 'renesamsen';

	/**
	 * One of your private keys; these can be requested via your Controlpanel
	 */
	public static $privateKey = '-----BEGIN RSA PRIVATE KEY-----
MIIEowIBAAKCAQEArM+HVRfaBjN2N9DzeiJY8wGijmRd/usa+2j2yL3Xb5yNkdqO
djnDHHhSa7HNna+yxv1Md4RrIbocQaqj6vGagjPQz1eRrK1uRDAeGR9hkZc81C4P
VBlRRAx5lMM/eccTC1w9nFtHs4ohDmNwmJgcqIkyzzXdOC6R2SViu28skeyoj9o6
PFx2Usdzr8THiDvFpnv756JpMM7w/hAEm05DltL9IHiOdNb12iXnRhlT6dtCGZpo
c5KL+uymEhxmiQe2WcIHnALhrJFLgEosbsHutKU4JQZzptNrF4XTsCNpZ33J8dF1
j1fXoBdx86jBk3q6P0u47vtWoHxb7JSNg1PTtwIDAQABAoIBAGT4+ZVR03WuGhQx
BiLF8P1EZkwW/wkVLHXb9d6Ddl7jtaCUeItB4uw+rcH5aTAK2kYE+OoYuFRDn4EL
CK4dr28Ggaq0+wxPZc934g5B1Mux97vukcxM4rwFIgE3OF6aYFlR8znp5/JS8k+q
8L5oms4rJEIIshLCuzuK6a6lHgDAticaz1nU4HDf3Li8+Qi3PfhHmbOkkWRJK8Gc
dfrloceJlyUqSjBqs9VcFUfmSQzzr0V4zbQpgOLn2I38xS9HfAAIQP8mJ5rW4Ht6
AesqTnv7IsvmgGELDzbvxaRcenWgVOPc23JIX6saiYZzQGpWeA+/+FB3nGQtgbyQ
sbV7YXkCgYEA2cupCXugdUjusqo51Sf7ENilM/wKZnr7oXnp7y7SwDn1xFMgSsZN
FGxxzFxv/KnC1lhLoYXyU9W3huG1a7hzmqeoYkhLBetzQRE8FFRtV98XdcrqwNuU
uEe8KgNWYc/mP1B5sKyXCYxZjpdGhYPV83cCuQoWOZq3jNRZMII+rC0CgYEAyx/G
NZUBHWR4dHwAZUPOE1t9aXtwgcdUmOU849Rw/9QUnkzG51VFRImg6f8eFGwuFGyO
x+lEAjt9y2qwbg/uPMqIggM56nEmvHX6TZPOss21LxFpCem9hE1Wcc4bMgDCfbg6
cgAi3zVVf+45lQ1DtA4uAQH02fva7Kt/1sTeGfMCgYBTzjxTO9D4kIHZGgt67BF9
3/9hy4AtAvHEpubPdJMACM17KAlq/Hc4fqojWwZ0kNY6KGuh0ar3e2tNaZinxKgn
QJBYkTzdIEaPKRSXNg2FHIEogFZos5W8e036VKJurNMKVesdgqvzrp/fcHJgeeRf
9NGFZk47CD/M3wEa22NGWQKBgQDAxOLirwpjzpnSUmw9rl/AVy9qD8/yGi3a/JMQ
1Oh4odj/cnXBzVbzeHnSGF9/mjsQ/wVyC5qTU8pKZnIRweSipMNwP4eTStcsO/rT
7NZZMogkpy08Tyugh5TmZGfCyJ3Lmi89SYvOsVr3Eiprni8Gjf5yzlyFE1PtD8U/
GY5+qQKBgG3BvW/cwNYn+wxXmy0Jb5ODPTz9YCI9WD+v9vGqeGc0lElbLqboDG+8
lBLdchQHmLF9Z5O1bse1xeFHz7SJ+NS50YticefyeTKwUbW+VDv6/+WRuGvHSLP5
1yrMKrSvjkzdGI7InIO+5GiT9ectPrYBh4Zb6FNQI8VlZDapqPb2
-----END RSA PRIVATE KEY-----
';
/*
-----BEGIN RSA PRIVATE KEY-----
MIIEowIBAAKCAQEArM+HVRfaBjN2N9DzeiJY8wGijmRd/usa+2j2yL3Xb5yNkdqO
djnDHHhSa7HNna+yxv1Md4RrIbocQaqj6vGagjPQz1eRrK1uRDAeGR9hkZc81C4P
VBlRRAx5lMM/eccTC1w9nFtHs4ohDmNwmJgcqIkyzzXdOC6R2SViu28skeyoj9o6
PFx2Usdzr8THiDvFpnv756JpMM7w/hAEm05DltL9IHiOdNb12iXnRhlT6dtCGZpo
c5KL+uymEhxmiQe2WcIHnALhrJFLgEosbsHutKU4JQZzptNrF4XTsCNpZ33J8dF1
j1fXoBdx86jBk3q6P0u47vtWoHxb7JSNg1PTtwIDAQABAoIBAGT4+ZVR03WuGhQx
BiLF8P1EZkwW/wkVLHXb9d6Ddl7jtaCUeItB4uw+rcH5aTAK2kYE+OoYuFRDn4EL
CK4dr28Ggaq0+wxPZc934g5B1Mux97vukcxM4rwFIgE3OF6aYFlR8znp5/JS8k+q
8L5oms4rJEIIshLCuzuK6a6lHgDAticaz1nU4HDf3Li8+Qi3PfhHmbOkkWRJK8Gc
dfrloceJlyUqSjBqs9VcFUfmSQzzr0V4zbQpgOLn2I38xS9HfAAIQP8mJ5rW4Ht6
AesqTnv7IsvmgGELDzbvxaRcenWgVOPc23JIX6saiYZzQGpWeA+/+FB3nGQtgbyQ
sbV7YXkCgYEA2cupCXugdUjusqo51Sf7ENilM/wKZnr7oXnp7y7SwDn1xFMgSsZN
FGxxzFxv/KnC1lhLoYXyU9W3huG1a7hzmqeoYkhLBetzQRE8FFRtV98XdcrqwNuU
uEe8KgNWYc/mP1B5sKyXCYxZjpdGhYPV83cCuQoWOZq3jNRZMII+rC0CgYEAyx/G
NZUBHWR4dHwAZUPOE1t9aXtwgcdUmOU849Rw/9QUnkzG51VFRImg6f8eFGwuFGyO
x+lEAjt9y2qwbg/uPMqIggM56nEmvHX6TZPOss21LxFpCem9hE1Wcc4bMgDCfbg6
cgAi3zVVf+45lQ1DtA4uAQH02fva7Kt/1sTeGfMCgYBTzjxTO9D4kIHZGgt67BF9
3/9hy4AtAvHEpubPdJMACM17KAlq/Hc4fqojWwZ0kNY6KGuh0ar3e2tNaZinxKgn
QJBYkTzdIEaPKRSXNg2FHIEogFZos5W8e036VKJurNMKVesdgqvzrp/fcHJgeeRf
9NGFZk47CD/M3wEa22NGWQKBgQDAxOLirwpjzpnSUmw9rl/AVy9qD8/yGi3a/JMQ
1Oh4odj/cnXBzVbzeHnSGF9/mjsQ/wVyC5qTU8pKZnIRweSipMNwP4eTStcsO/rT
7NZZMogkpy08Tyugh5TmZGfCyJ3Lmi89SYvOsVr3Eiprni8Gjf5yzlyFE1PtD8U/
GY5+qQKBgG3BvW/cwNYn+wxXmy0Jb5ODPTz9YCI9WD+v9vGqeGc0lElbLqboDG+8
lBLdchQHmLF9Z5O1bse1xeFHz7SJ+NS50YticefyeTKwUbW+VDv6/+WRuGvHSLP5
1yrMKrSvjkzdGI7InIO+5GiT9ectPrYBh4Zb6FNQI8VlZDapqPb2
-----END RSA PRIVATE KEY-----
*/
}