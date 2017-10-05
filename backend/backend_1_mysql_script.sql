CREATE SCHEMA widgetcompanydb;

CREATE TABLE widgetcompanydb.customer (
	id                   int  NOT NULL  AUTO_INCREMENT,
	email_address        varchar(100)    ,
	phone_number         varchar(40)    ,
	shipping_address     varchar(100)    ,
	billing_address      varchar(100)    ,
	purchases            set    ,
	payment_cards        set    ,
	cart                 set    ,
	customer_status      varchar(20)    ,
	newsletters          set    ,
	surveys              set    ,
	first_name           varchar(100)    ,
	last_name            varchar(100)    ,
	password             varchar(12)    ,
	hash                 varchar(50)    ,
	active               bool    ,
	emails               set    ,
	CONSTRAINT pk_customer PRIMARY KEY ( id ),
	CONSTRAINT pk_customer_0 UNIQUE ( purchases ) ,
	CONSTRAINT pk_customer_1 UNIQUE ( cart ) ,
	CONSTRAINT pk_customer_2 UNIQUE ( newsletters ) ,
	CONSTRAINT pk_customer_3 UNIQUE ( surveys ) ,
	CONSTRAINT pk_customer_4 UNIQUE ( shipping_address ) ,
	CONSTRAINT pk_customer_5 UNIQUE ( billing_address ) ,
	CONSTRAINT pk_customer_6 UNIQUE ( emails )
 );

CREATE TABLE widgetcompanydb.email (
	id                   int  NOT NULL  AUTO_INCREMENT,
	subject              varchar(500)    ,
	body                 varchar(3000)    ,
	CONSTRAINT pk_email PRIMARY KEY ( id ),
	CONSTRAINT fk_email_customer FOREIGN KEY ( id ) REFERENCES widgetcompanydb.customer( emails ) ON DELETE NO ACTION ON UPDATE NO ACTION
 );

CREATE TABLE widgetcompanydb.newsletter (
	id                   int  NOT NULL  AUTO_INCREMENT,
	name                 varchar(100)    ,
	description          varchar(300)    ,
	CONSTRAINT pk_newsletter PRIMARY KEY ( id ),
	CONSTRAINT fk_newsletter_customer FOREIGN KEY ( id ) REFERENCES widgetcompanydb.customer( newsletters ) ON DELETE NO ACTION ON UPDATE NO ACTION
 );

CREATE TABLE widgetcompanydb.payment_card (
	id                   int  NOT NULL  AUTO_INCREMENT,
	card_number          bigint    ,
	owner                int    ,
	CONSTRAINT pk_payment_cards PRIMARY KEY ( id ),
	CONSTRAINT fk_payment_card_customer FOREIGN KEY ( owner ) REFERENCES widgetcompanydb.customer( id ) ON DELETE NO ACTION ON UPDATE NO ACTION
 );

CREATE INDEX idx_payment_card ON widgetcompanydb.payment_card ( owner );

CREATE TABLE widgetcompanydb.purchase (
	id                   int  NOT NULL  AUTO_INCREMENT,
	owner                int    ,
	purchase_date        date    ,
	orders               set    ,
	CONSTRAINT pk_purchase PRIMARY KEY ( id ),
	CONSTRAINT pk_purchase_0 UNIQUE ( orders ) ,
	CONSTRAINT fk_purchase_customer FOREIGN KEY ( id ) REFERENCES widgetcompanydb.customer( purchases ) ON DELETE NO ACTION ON UPDATE NO ACTION
 );

CREATE TABLE widgetcompanydb.shipping_address (
	id                   int  NOT NULL  AUTO_INCREMENT,
	address              varchar(100)    ,
	postal_code          varchar(20)    ,
	state                varchar(100)    ,
	town                 varchar(100)    ,
	CONSTRAINT pk_shipping_address PRIMARY KEY ( id ),
	CONSTRAINT pk_shipping_address_0 UNIQUE ( address ) ,
	CONSTRAINT fk_shipping_address_customer FOREIGN KEY ( id ) REFERENCES widgetcompanydb.customer( shipping_address ) ON DELETE NO ACTION ON UPDATE NO ACTION
 );

CREATE TABLE widgetcompanydb.survey (
	id                   int  NOT NULL  AUTO_INCREMENT,
	name                 varchar(100)    ,
	questions            set    ,
	survey_status        varchar(20)    ,
	CONSTRAINT pk_survey PRIMARY KEY ( id ),
	CONSTRAINT pk_survey_0 UNIQUE ( questions ) ,
	CONSTRAINT fk_survey_customer FOREIGN KEY ( id ) REFERENCES widgetcompanydb.customer( surveys ) ON DELETE NO ACTION ON UPDATE NO ACTION
 );

CREATE TABLE widgetcompanydb.billing_address (
	id                   int  NOT NULL  AUTO_INCREMENT,
	state                varchar(100)    ,
	town                 varchar(100)    ,
	postal_code          varchar(20)    ,
	address              varchar(100)    ,
	CONSTRAINT pk_billing_address PRIMARY KEY ( id ),
	CONSTRAINT pk_billing_address_0 UNIQUE ( address ) ,
	CONSTRAINT fk_billing_address_customer FOREIGN KEY ( id ) REFERENCES widgetcompanydb.customer( billing_address ) ON DELETE NO ACTION ON UPDATE NO ACTION
 );

CREATE TABLE widgetcompanydb.cart (
	id                   int  NOT NULL  AUTO_INCREMENT,
	owner                int    ,
	orders               set    ,
	CONSTRAINT pk_cart PRIMARY KEY ( id ),
	CONSTRAINT pk_cart_0 UNIQUE ( orders ) ,
	CONSTRAINT fk_cart_customer FOREIGN KEY ( id ) REFERENCES widgetcompanydb.customer( cart ) ON DELETE NO ACTION ON UPDATE NO ACTION
 );

CREATE INDEX idx_cart ON widgetcompanydb.cart ( owner );

CREATE TABLE widgetcompanydb.`order` (
	id                   int  NOT NULL  AUTO_INCREMENT,
	widgets              set    ,
	order_status         bool    ,
	CONSTRAINT pk_orders PRIMARY KEY ( id ),
	CONSTRAINT pk_order UNIQUE ( widgets ) ,
	CONSTRAINT fk_order_cart FOREIGN KEY ( id ) REFERENCES widgetcompanydb.cart( orders ) ON DELETE NO ACTION ON UPDATE NO ACTION,
	CONSTRAINT fk_order_purchase FOREIGN KEY ( id ) REFERENCES widgetcompanydb.purchase( orders ) ON DELETE NO ACTION ON UPDATE NO ACTION
 );

CREATE TABLE widgetcompanydb.question (
	id                   int  NOT NULL  AUTO_INCREMENT,
	title                varchar(100)    ,
	answers              set    ,
	CONSTRAINT pk_question PRIMARY KEY ( id ),
	CONSTRAINT fk_question_survey FOREIGN KEY ( id ) REFERENCES widgetcompanydb.survey( questions ) ON DELETE NO ACTION ON UPDATE NO ACTION
 );

CREATE TABLE widgetcompanydb.widget (
	id                   int  NOT NULL  AUTO_INCREMENT,
	name                 varchar(100)    ,
	description          varchar(200)    ,
	colors               set    ,
	price                double    ,
	CONSTRAINT pk_widget PRIMARY KEY ( id ),
	CONSTRAINT pk_widget_0 UNIQUE ( colors ) ,
	CONSTRAINT fk_widget_order FOREIGN KEY ( id ) REFERENCES widgetcompanydb.`order`( widgets ) ON DELETE NO ACTION ON UPDATE NO ACTION
 );

CREATE TABLE widgetcompanydb.address (
	id                   int  NOT NULL  AUTO_INCREMENT,
	street               varchar(100)    ,
	apartment            varchar(100)    ,
	CONSTRAINT pk_address PRIMARY KEY ( id ),
	CONSTRAINT fk_address_shipping_address FOREIGN KEY ( id ) REFERENCES widgetcompanydb.shipping_address( address ) ON DELETE NO ACTION ON UPDATE NO ACTION,
	CONSTRAINT fk_address_billing_address FOREIGN KEY ( id ) REFERENCES widgetcompanydb.billing_address( address ) ON DELETE NO ACTION ON UPDATE NO ACTION
 );

CREATE TABLE widgetcompanydb.color (
	id                   int  NOT NULL  AUTO_INCREMENT,
	name                 varchar(100)    ,
	CONSTRAINT pk_colors PRIMARY KEY ( id ),
	CONSTRAINT fk_color_widget FOREIGN KEY ( id ) REFERENCES widgetcompanydb.widget( colors ) ON DELETE NO ACTION ON UPDATE NO ACTION
 );
