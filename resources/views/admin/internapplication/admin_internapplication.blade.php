@extends('layouts.navadmin')

@section('title', 'Application Intern')

@section('content')

<div class="page-heading">
<h3>Internship Submission</h3>
</div>
<section class="section">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Institution</th>
                            <th>Batch</th>
                            <th>Status</th>
                            <th class="no-sort text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Shavira</td>
                            <td>System Analyst Intern</td>
                            <td>Universitas Jember</td>
                            <td>1</td>
                            <td>In Progress</td>
                            <td class="text-center">
                                <a href="{{ route('admin_applicationdetail') }}" 
                                    class="action-icon" 
                                    title="detail">
                                        <i class="bi bi-file-earmark-fill"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ghina Qurrotu Aini</td>
                            <td>Backend Developer Intern</td>
                            <td>Universitas Brawijaya</td>
                            <td>1</td>
                            <td>In Progress</td>
                            <td class="text-center">
                                <a href="#" class="action-icon" title="detail">
                                    <i class="bi bi-file-earmark-fill"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Alfian Pratama</td>
                            <td>Frontend Developer Intern</td>
                            <td>Universitas Gadjah Mada</td>
                            <td>1</td>
                            <td>In Progress</td>
                            <td class="text-center">
                                <a href="#" class="action-icon" title="detail">
                                    <i class="bi bi-file-earmark-fill"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Raka Dwi Saputra</td>
                            <td>UI/UX Designer Intern</td>
                            <td>Institut Teknologi Sepuluh Nopember</td>
                            <td>2</td>
                            <td>In Progress</td>
                            <td class="text-center">
                                <a href="#" class="action-icon" title="detail">
                                    <i class="bi bi-file-earmark-fill"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Nabila Putri</td>
                            <td>QA Engineer Intern</td>
                            <td>Universitas Airlangga</td>
                            <td>2</td>
                            <td>In Progress</td>
                            <td class="text-center">
                                <a href="#" class="action-icon" title="detail">
                                    <i class="bi bi-file-earmark-fill"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Dimas Arya</td>
                            <td>Data Analyst Intern</td>
                            <td>Universitas Indonesia</td>
                            <td>2</td>
                            <td>In Progress</td>
                            <td class="text-center">
                                <a href="#" class="action-icon" title="detail">
                                    <i class="bi bi-file-earmark-fill"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Putri Amelia</td>
                            <td>Network Engineer Intern</td>
                            <td>Universitas Hasanuddin</td>
                            <td>2</td>
                            <td>In Progress</td>
                            <td class="text-center">
                                <a href="#" class="action-icon" title="detail">
                                    <i class="bi bi-file-earmark-fill"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Fajar Nugraha</td>
                            <td>Project Management Intern</td>
                            <td>Universitas Diponegoro</td>
                            <td>2</td>
                            <td>In Progress</td>
                            <td class="text-center">
                                <a href="#" class="action-icon" title="detail">
                                    <i class="bi bi-file-earmark-fill"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Zahra Nuraini</td>
                            <td>DevOps Engineer Intern</td>
                            <td>Universitas Negeri Malang</td>
                            <td>2</td>
                            <td>In Progress</td>
                            <td class="text-center">
                                <a href="#" class="action-icon" title="detail">
                                    <i class="bi bi-file-earmark-fill"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Aditya Ramadhan</td>
                            <td>Mobile Developer Intern</td>
                            <td>Universitas Muhammadiyah Malang</td>
                            <td>2</td>
                            <td>In Progress</td>
                            <td class="text-center">
                                <a href="#" class="action-icon" title="detail">
                                    <i class="bi bi-file-earmark-fill"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>

@endsection