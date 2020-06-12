INSERT INTO dw_finalproject_13.author (name, about, photo)
VALUES ( 'Miguel Torga', 'Pseudónimo de Adolfo Correia da Rocha, autor de uma vasta produção literária, largamente reconhecida e traduzida em várias línguas. Nasceu em S. Martinho de Anta em 1907. Depois de uma experiência de emigração no Brasil durante a adolescência, cursou Medicina em Coimbra, onde passou a viver e onde veio a falecer em 1995. Foi poeta presencista numa primeira fase; a sua obra abordou temas sociais como a justiça e a liberdade, o amor, a angústia da morte, e deixou transparecer uma aliança íntima e permanente entre o homem e a terra.', 'miguel-torga.jpg');

INSERT INTO dw_finalproject_13.author (name, about, photo)
VALUES ( 'Anne Frank', 'Anne Frank nasceu a 12 de junho de 1929 em Frankfurt, na Alemanha, no seio de uma família judaica. Em 1933, após a tomada de poder pelos nazis, os seus pais decidiram partir para Amesterdão, na Holanda, país que tinha fama de bem acolher as minorias religiosas. Em 1940, porém, os alemães invadem este território e iniciam uma forte perseguição aos judeus, reencaminhando-os para "campos de trabalho". Depois de dois anos de reclusão num anexo ao antigo escritório do pai, Anne Frank é detida em agosto de 1944. Viria a morrer de tifo no campo de concentração de Bergen-Belsen em março de 1945.', 'anne-frank.jpg');

INSERT INTO dw_finalproject_13.author (name, about, photo)
VALUES ( 'Herberto Helder', 'Herberto Helder nasceu em 1930 no Funchal, onde concluiu o 5.º ano. Em 1948 matriculou-se em Direito mas cedo abandonou esse curso para se inscrever em Filologia Românica, que frequentou durante três anos. Teve inúmeros trabalhos e colaborou em vários periódicos como A Briosa, Re-nhau-nhau, Búzio, Folhas de Poesia, Graal, Cadernos do Meio-dia, Pirâmide, Távola Redonda, Jornal de Letras e Artes. Em 1969 trabalhou como diretor literário da editorial Estampa. Viajou pela Bélgica, Holanda, Dinamarca e em 1971 partiu para África onde fez uma série de reportagens para a revista Notícias. Em 1994 foi-lhe atribuído o Prémio Pessoa, que recusou. Faleceu em Cascais a 23 de março de 2015, tinha 84 anos.', 'herberto-helder.jpg');

INSERT INTO dw_finalproject_13.author (name, about, photo)
VALUES ( 'Hugo Rodrigues', 'Hugo Rodrigues é pediatra em Viana do Castelo. É também docente da Universidade do Minho e do Instituto Politécnico de Viana do Castelo e formador pelo European Ressuscitation Council na área de Emergências Pediátricas. Criador do site Pediatria para Todos (que conta já com mais de 10 milhões de visitas) Hugo Rodrigues é também presença regular na televisão, na TVI e no Porto Canal, e na rádio, na M80.', 'hugo-rodrigues.jpg');

INSERT INTO dw_finalproject_13.author (name, about, photo)
VALUES ( 'James Allen', 'James Allen foi escritor, filósofo e poeta. Escreveu sobre temas complexos como a fé, o destino, o amor, a paciência e a espiritualidade, mas teve o raro dom de conseguir expor os temas de forma tão clara e simples, que qualquer pessoa os pode compreender. Nasceu em 1864, em Leicester, Inglaterra, de onde partiu aos 15 anos, com toda a família, rumo aos Estados Unidos. Contudo, dois dias depois de chegarem ao novo continente, o seu pai viria a falecer, o que obrigou a família a reorganizar-se. A morte do pai levou James Allen a abandonar a escola e a começar a trabalhar para ajudar a sustentar a família. Apesar de trabalhar durante muitas horas, Allen continuou a ler e a estudar os temas mais diversos. Entre os seus autores preferidos, incluíam-se Shakespeare, Milton, Emerson, Buda, Jesus, Whitman e Lao-Tsé.', 'james-allen.jpg');

INSERT INTO dw_finalproject_13.genre (name)
VALUES ('Romance');

INSERT INTO dw_finalproject_13.genre (name)
VALUES ('Ficção');

INSERT INTO dw_finalproject_13.genre (name)
VALUES ('Filosofia');

INSERT INTO dw_finalproject_13.genre (name)
VALUES ('Drama');

INSERT INTO dw_finalproject_13.publisher (name)
VALUES ('Bertrand Editora');

INSERT INTO dw_finalproject_13.publisher (name)
VALUES ('Porto Editora');

INSERT INTO dw_finalproject_13.publisher (name)
VALUES ('LEYA');

INSERT INTO dw_finalproject_13.publisher (name)
VALUES ('Plátano Editora');

INSERT INTO dw_finalproject_13.publisher (name)
VALUES ('Rés-Editoras');

INSERT INTO dw_finalproject_13.type_book (name)
VALUES ('E-Book');

INSERT INTO dw_finalproject_13.type_book (name)
VALUES ('Capa dura');

INSERT INTO dw_finalproject_13.type_book (name)
VALUES ('Capa fina');

INSERT INTO dw_finalproject_13.type_book (name)
VALUES ('Usado');

INSERT INTO dw_finalproject_13.book (title, publishing_year, edition, price, isbn, stock, sold, cover, pages, genre_id, publisher_id, type_book_id, author_id)
VALUES ('Bichos', '2008-01-01', '1', '5.95', '9789722036863', '50', '40', 'bichos-miguel.jpg', '96', '1', '1', '2', '1');

INSERT INTO dw_finalproject_13.book (title, publishing_year, edition, price, isbn, stock, sold, cover, pages, genre_id, publisher_id, type_book_id, author_id)
VALUES ('Apresentação do Rosto', '2020-06-01', '1', '17.91', '978-972-0-03279-9', '70', '41' 'herberto-helder.jpg', '216', '2', '2', '1', '3');

INSERT INTO dw_finalproject_13.book (title, publishing_year, edition, price, isbn, stock, sold, cover, pages, genre_id, publisher_id, type_book_id, author_id)
VALUES ('O Diário de Anne Frank', '2019-03-01', '1', '16.60', '978-972-38-2911-2', '100', '50', 'anne-frank.jpg', '448', '3', '3', '4', '2');

INSERT INTO dw_finalproject_13.book (title, publishing_year, edition, price, isbn, stock, sold, cover, pages, genre_id, publisher_id, type_book_id, author_id)
VALUES ('Tu és aquilo que pensas', '2020-05-01', '1', '11.10', '978-989-739-061-6', '45', '41','james-allen.jpg', '80', '4', '4', '2', '5');

INSERT INTO dw_finalproject_13.book (title, publishing_year, edition, price, isbn, stock, sold, cover, pages, genre_id, publisher_id, type_book_id, author_id)
VALUES ('O Livro do seu Bebé', '2020-07-13', '1', '19.90', '9789896662141', '80', '30' 'hugo-rodrigues.jpg', '336', '5', '5', '3', '4');

