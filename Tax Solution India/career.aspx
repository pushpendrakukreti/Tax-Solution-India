<%@ Page Title="" Language="C#" MasterPageFile="~/Site1.Master" AutoEventWireup="true" CodeBehind="career.aspx.cs" Inherits="TaxSolutionOnline.career" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
    <style>
        .bannercarousel{
            display:none !important;
        }
        .career{
                background-color: #666;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <tr>
              <td class="content" valign="top"><table border="0" cellpadding="0" cellspacing="0" width="100%">
              <tbody><tr>
                <td align="top" width="625"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tbody><tr>
                    <td><h1>Career </h1></td>
                  </tr>
          
              
                  <tr>
                    <td class="txt"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td><form name="frm" method="post" action="career-enquiry.php" enctype="multipart/form-data" onSubmit="return validate(this)" class="inner-form">
 <input type="hidden" name="submitenqfrm" value="yes">
 <table width="90%" height="291" cellspacing="5" cellpadding="5" border="0" align="right">
 <tbody>
 <tr>
 </tr>
 <tr>
 <td style="width:90px;">Name:</td>
 <td colspan="2">
 <div style="text-align: left;">
     <asp:TextBox ID="txtname" runat="server"></asp:TextBox>
 &nbsp;*
 </div>
 </td>
 </tr>
 <tr>
 <td>Currant Employer:</td>
 <td colspan="2">
 <div style="text-align: left;">
  <asp:TextBox ID="txtcemp" runat="server"></asp:TextBox> &nbsp;*
</div>
 </td>
 </tr>
 <tr>
 <td>Job Title:</td>
 <td colspan="2">
 <div style="text-align: left;">

  <asp:TextBox ID="txtjobti" runat="server"></asp:TextBox> &nbsp;*
</div>
 </td>
 </tr>
 <tr>
 <td>Qualification:</td>
 <td colspan="2">
 <div style="text-align: left;">
  <asp:TextBox ID="txtquli" runat="server"></asp:TextBox> &nbsp;*
</div>
 </td>
 </tr>
 <tr>
 <td>Experience</td>
 <td colspan="2">
 <div style="text-align: left;">
  <asp:TextBox ID="txtexp" runat="server"></asp:TextBox> &nbsp;*
 </div>
 </td>
 </tr>
 <tr>
 <td>Email</td>
 <td colspan="2">
 <div style="text-align: left;">
  <asp:TextBox ID="txtemail" runat="server"></asp:TextBox> &nbsp;*
</div>
 </td>
 </tr>
 <tr><td>Contact No</td>
 <td colspan="2">
 <div style="text-align: left;">
  <asp:TextBox ID="txtcont" runat="server"></asp:TextBox> &nbsp;*
</div>
 </td>
 </tr>
 <tr>
 </tr><tr>
 <td style="text-align: left; vertical-align: top;">
 <p style="text-align: left;">&nbsp;</p>
 <p style="text-align: left;">Address</p>
 </td>
 <td colspan="2">
  <asp:TextBox ID="txtmess" runat="server"  class="textarea"></asp:TextBox> &nbsp;*
 </td>
 </tr>
 <tr>
 <td>City:</td>
 <td colspan="2">
 <div style="text-align: left;">
  <asp:TextBox ID="txtcity" runat="server"  class="textarea"></asp:TextBox> &nbsp;*
</div>
 </td>
 </tr>
 
 <tr>
 <td>State:</td>
 <td colspan="2">
 <div style="text-align: left;">
 <asp:TextBox ID="txtste" runat="server"></asp:TextBox> &nbsp;*
 </div>
 </td>
 </tr>
 <tr>
 <td>Country</td>
 <td colspan="2">
     <asp:DropDownList ID="DropDownList1" runat="server" style="width:250px;">
     <asp:ListItem>-Select-</asp:ListItem>
     <asp:ListItem>India</asp:ListItem>
     <asp:ListItem>Afghanistan</asp:ListItem>
     <asp:ListItem>Albania</asp:ListItem>
     <asp:ListItem>Algeria</asp:ListItem>
     <asp:ListItem>American Samoa</asp:ListItem>
     <asp:ListItem>Andora</asp:ListItem>
     <asp:ListItem>Angola</asp:ListItem>
     <asp:ListItem>Anguilla</asp:ListItem>
     <asp:ListItem>Antarctica</asp:ListItem>
     <asp:ListItem>Antigua and Barbuda</asp:ListItem>
     <asp:ListItem>Argentina</asp:ListItem>
     <asp:ListItem>Armenia</asp:ListItem>
     <asp:ListItem>Aruba</asp:ListItem>
     <asp:ListItem>Australia</asp:ListItem>
     <asp:ListItem>Azerbaijan</asp:ListItem>
<asp:ListItem>Bahamas</asp:ListItem>
     <asp:ListItem>Bahrain</asp:ListItem>
     <asp:ListItem>Bangladesh</asp:ListItem>
     <asp:ListItem>Barbados</asp:ListItem>
     <asp:ListItem>Belarus</asp:ListItem>
     <asp:ListItem>Belgium</asp:ListItem>
     <asp:ListItem>Belize</asp:ListItem>
     <asp:ListItem>Benin</asp:ListItem>
     <asp:ListItem>Bermuda</asp:ListItem>
     <asp:ListItem>Bhutan</asp:ListItem>
     <asp:ListItem>Bolivia</asp:ListItem>
     <asp:ListItem>Bosnia and Herzegovina</asp:ListItem>
     <asp:ListItem>Botswana</asp:ListItem>
     </asp:DropDownList>
</td>
 </tr>
 
 <tr>
 <td>Upload Resume:</td>
 <td colspan="2">
 <div style="text-align: left;">
 
     <asp:FileUpload ID="FileUpload1" runat="server" AllowMultiple="true" />
&nbsp;*</div>
 </td>
 </tr>
 
 <tr>
 <td> <br>
<tr>
<td>
 * Required fields</td>
 </tr>
  <tr>
 <td>
     <asp:Label ID="lblmess" runat="server" Text=""></asp:Label>
 </td>
 </tr>
 <tr>
 <td> <br>
 </td>
 <td align="right" colspan="2">
 <p style="text-align: left;">
     <asp:Button ID="submit" runat="server" Text="Submit" class="submit-btn" 
         /><%--onclick="submit_Click" --%>
 </p>
 </td>
 </tr>
 
 </tbody></table>
 </form></td>
  </tr>
</tbody></table></td>
                  </tr>
         
                    <tr><td class="txt">&nbsp;</td>
                  </tr>
          
                  
                </tbody></table></td>
                                                </tr>
</asp:Content>