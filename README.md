# Frontend test
На странице присутствуют данные по сертификатам и по запросам на сертификаты

0. реализовать отображение данных по двум отдельным вкладкам (отображение на свой вкус, просто чтобы были видны все поля, дату преобразовать в человекопонятный вид "1 января 2015г.")
0. реализовать на вкладке сертификатов чекбокс "есть пин", выделение которого отображает\скрывает сертификаты на основе параметра "HasPin" в данных каждого сертификата
0. реализовать на вкладке сертификатов чекбокс "действительные", выделение которого  отображает\скрывает сертификаты на основе параметра "NotAfter" в данных каждого сертификата, таким образом что текущая дата должна быть меньше указанной в "NotAfter"
0. реализовать сортировку сертификатов по указанным ниже параметрам в прямом и обратном порядке. использовать Select для выбора вариантов сортировки
  * CertificateId
  * SubjectName
  * NotBefore

0. реализовать начальную сортировку по SubjectName
0. для Запросов на сертификаты сделать сортировку по полям в прямом и обратно порядке
  * CreationTime
  * ExtensionData.SNILS

0. Select на странице использовать один, скрыть чекбоксы когда активна вкладка запросов
0. сделать для каждого сетрификата кнопку "удалить", которая отправляет запрос на сервер и в случае успеха удаляет запрос из списка (/?action=deleteCertificate в ответе приходит {success:true}, предусмотреть вариант что сервер ответил не true или не ответил вовсе)
0. добавить окно подтверждения удаления, кнопки да\нет, да - удалем, нет - закрываем окно подтверждения
0. добавить окно добавления сертификата - всплывающее окно (fancybox) в котором возможно заполнить поля (те же что есть в данных), и отправить их на сервер (?/action=addCertificate в ответе приходит {success:true}, предусмотреть вариант что сервер ответил не true или не ответил вовсе) в случае успеха - добавить данные нового сертификат в общий список и отобразить на странице
11 - реализовать проверку данных при добавлении сертификата, все поля на непустоту, E-Mail - на валидность

