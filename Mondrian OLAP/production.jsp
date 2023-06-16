<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %> <%@
taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %> <%@ taglib
prefix="c" uri="http://java.sun.com/jstl/core" %>

<jp:mondrianQuery
  id="query01"
  jdbcDriver="com.mysql.jdbc.Driver"
  jdbcUrl="jdbc:mysql://localhost/uas_kelompok8?user=root&password="
  catalogUri="/WEB-INF/queries/production.xml"
>
  select {[Measures].[Quantity],[Measures].[Order]} ON COLUMNS,
  {([location],[time].[All Times],[product],[dim_shipmethod])} ON ROWS from
  [production]
</jp:mondrianQuery>

<c:set var="title01" scope="session"
  >Query Production using Mondrian OLAP</c:set
>
