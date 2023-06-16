<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %> <%@
taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %> <%@ taglib
prefix="c" uri="http://java.sun.com/jstl/core" %>

<jp:mondrianQuery
  id="query01"
  jdbcDriver="com.mysql.jdbc.Driver"
  jdbcUrl="jdbc:mysql://localhost/uas_kelompok8?user=root&password="
  catalogUri="/WEB-INF/queries/purchasing.xml"
>
  select {[Measures].[Order],[Measures].[Total]} ON COLUMNS,
  {([dim_addres],[dim_time].[All Times],[dim_vendor],[dim_productvendor])} ON
  ROWS from [purchasing]
</jp:mondrianQuery>

<c:set var="title01" scope="session"
  >Query Purchasing using Mondrian OLAP</c:set
>
