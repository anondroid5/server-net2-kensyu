xampp�Ńh�L�������g���[�g�̕ύX�����Ă���̂ŁA
�{��localhost�Ǝ��s����f�B���N�g��(c:/xamp/htdocs)��
c:/www�ɂȂ��Ă���B

�ȉ����A�ݒ�̓��e�ł��B

�uhttpd.conf�v�t�@�C���i�f�t�H���g�C���X�g�[���ꏊ�Fc:/xampp/apache/conf�j���C�����܂��i�t�@�C���̓o�b�N�A�b�v���Ƃ��Ă��������j�B

���\�ߕύX�ꏊ�̃t�H���_���������Ă����܂��B

��j�ύX�ꏊ�Fc:/document/htdocs

 

�P�D�t�@�C����185�s�ڂ��炢�ɂ��镶������R�����g�A�E�g�i������̐擪�Ɂh#�h��t���j���ăR�s�[�B�\��t���ŁA�ύX�ꏊ�ɒu�������܂��B

#DocumentRoot �gC:/xampp/htdocs�h�@���擪�Ɂh#�h�t��

DocumentRoot �gC:/documenet/htdocs�h�@����L�̕�������R�s�[���A�ύX�������t�H���_�ɏC���i�h#�h�͕t���Ȃ��j

�Q�D�t�@�C����221�s�ڂ��炢�ɂ��镶������R�����g�A�E�g�i������̐擪�Ɂh#�h��t���j���ăR�s�[�B�\��t���ŁA�ύX�ꏊ�ɒu��������B

#<Directory �gC:/xampp/htdocs�h>�@���擪�Ɂh#�h�t��

<Directory �gC:/documenet/htdocs�h>�@����L�̕�������R�s�[���A�ύX�������t�H���_�ɏC���i�h#�h�͕t���Ȃ��j

�C�������uhttpd.conf�v��ۑ����Aapache�T�[�o�[���ċN���B

 
�ȏ�ŏI���ł��B


������xampp�Ǘ���ʂɁuhttp://�`/xampp/�v�ŃA�N�Z�X���邽�߃G�C���A�X���w��


[httpd-xampp.conf�����L�̗l�ɕύX]
�uhttpd-xampp.conf�v�t�@�C���́u(XAMPP�C���X�g�[���f�B���N�g��)\apache\conf\extra\�v�f�B���N�g���ɂ���܂��B

<Directory �gC:/xampp/htdocs/xampp�h>
<IfModule php5_module>
<Files �gstatus.php�h>
php_admin_flag safe_mode off
</Files>
</IfModule>
AllowOverride AuthConfig
</Directory>

���E�E�E�ύX

Alias /xampp �gC:/xampp/htdocs/xampp/�h
<Directory �gC:/xampp/htdocs/xampp�h>
<IfModule php5_module>
<Files �gstatus.php�h>
php_admin_flag safe_mode off
</Files>
</IfModule>
AllowOverride AuthConfig
Order allow,deny
Allow from all
</Directory>

���ύX���xampp�R���g���[���p�l����
admin�{�^����xampp�Ǘ���ʂւ̃A�N�Z�X�͕s�ɂȂ�܂��B

FTP�A�J�E���g�Ƀt�H���_�ւ̃A�N�Z�X�����w�肵�Ă����̂ŉ��L�����s
�EFileZilla���N��
�EEdit��Users�̏��ɑI��
�E�Ώۃ��[�U�[��I��
�EPage������shared folders��I��
�EShared folders���A�N�Z�X�\�ȃt�H���_��ύX



[XAMPP��MySQL���R�}���h�v�����v�g����g�p����BWindows���ϐ�Path�̐ݒ�]
http://hapisupu.com/2015/08/xampp-mysql-command-prompt/



