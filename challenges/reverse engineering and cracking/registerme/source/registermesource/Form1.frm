VERSION 5.00
Begin VB.Form Form1 
   BackColor       =   &H00000000&
   BorderStyle     =   1  'Fixed Single
   Caption         =   "Register me"
   ClientHeight    =   1485
   ClientLeft      =   45
   ClientTop       =   390
   ClientWidth     =   3615
   Icon            =   "Form1.frx":0000
   LinkTopic       =   "Form1"
   MaxButton       =   0   'False
   MinButton       =   0   'False
   ScaleHeight     =   1485
   ScaleWidth      =   3615
   StartUpPosition =   3  'Windows Default
   Begin VB.TextBox Text1 
      Enabled         =   0   'False
      Height          =   285
      Left            =   120
      TabIndex        =   3
      Top             =   1080
      Visible         =   0   'False
      Width           =   3375
   End
   Begin VB.Timer Timer1 
      Interval        =   1000
      Left            =   360
      Top             =   360
   End
   Begin VB.CommandButton Command1 
      Caption         =   "Show Flag"
      Height          =   375
      Left            =   120
      TabIndex        =   2
      Top             =   600
      Visible         =   0   'False
      Width           =   3375
   End
   Begin VB.Label lbl_status 
      BackStyle       =   0  'Transparent
      ForeColor       =   &H00FFFFFF&
      Height          =   255
      Left            =   720
      TabIndex        =   1
      Top             =   120
      Width           =   2655
   End
   Begin VB.Label Label1 
      BackStyle       =   0  'Transparent
      Caption         =   "Status:"
      ForeColor       =   &H00FFFFFF&
      Height          =   255
      Left            =   120
      TabIndex        =   0
      Top             =   120
      Width           =   615
   End
End
Attribute VB_Name = "Form1"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Dim filename As String
Dim flag As String

Private Sub Command1_Click()
Text1.Text = flag
Text1.Enabled = True
Text1.Visible = True
End Sub

Private Sub Form_Load()
filename = Chr(97) & Chr(99) & Chr(116) & Chr(105) & Chr(118) & Chr(97) & Chr(116) & Chr(105) & Chr(111) & Chr(110) & Chr(46) & Chr(107) & Chr(101) & Chr(121)
flag = Chr(98) & Chr(114) & Chr(105) & Chr(120) & Chr(101) & Chr(108) & Chr(67) & Chr(84) & Chr(70) & Chr(123) & Chr(102) & Chr(49) & Chr(108) & Chr(51) & Chr(52) & Chr(99) & Chr(99) & Chr(51) & Chr(115) & Chr(115) & Chr(125)
End Sub

Private Sub Timer1_Timer()
    If Dir("activation.key") <> "" Then
      lbl_status.ForeColor = vbGreen
      lbl_status.Caption = "REGISTERED!"
      Command1.Visible = True
    Else
      lbl_status.ForeColor = vbRed
      lbl_status.Caption = "NOT REGISTERED!"
      Command1.Visible = False
    End If
End Sub
